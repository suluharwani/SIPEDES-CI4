<?php

namespace App\Controllers;

use App\Models\TravelBookingModel;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\I18n\Time;

class TravelBooking extends BaseController
{
    public function create(): RedirectResponse
    {
        $travel = config('Travel');
        $rules = [
            'name'        => 'required|min_length[2]|max_length[120]',
            'phone'       => 'required|min_length[8]|max_length[24]',
            'origin'      => 'required|in_list[' . implode(',', $travel->origins) . ']',
            'destination' => 'required|in_list[' . implode(',', $travel->destinations) . ']',
            'travel_date' => 'required|valid_date[Y-m-d]',
            'passengers'  => 'required|integer|greater_than[0]|less_than_equal_to[20]',
            'schedule'    => 'required|in_list[Pagi,Sore/Malam]',
            'service'     => 'required|in_list[Travel reguler,Bus pariwisata,Sewa mobil + sopir]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->to('/#pesan')->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = $this->request->getPost(array_keys($rules));
        $bookingCode = 'EH' . Time::now('Asia/Jakarta')->format('ymd') . strtoupper(bin2hex(random_bytes(3)));

        (new TravelBookingModel())->insert([
            'booking_code'  => $bookingCode,
            'customer_name' => $data['name'],
            'phone'         => $data['phone'],
            'origin'        => $data['origin'],
            'destination'   => $data['destination'],
            'travel_date'   => $data['travel_date'],
            'passengers'    => (int) $data['passengers'],
            'schedule'      => $data['schedule'],
            'service'       => $data['service'],
            'status'        => 'pending',
        ]);

        $message = "Halo {$travel->brand}, saya ingin memesan.\n\nKode booking: {$bookingCode}\nNama: {$data['name']}\nTelepon: {$data['phone']}\nLayanan: {$data['service']}\nRute: {$data['origin']} – {$data['destination']}\nTanggal: {$data['travel_date']}\nJadwal: {$data['schedule']}\nPenumpang: {$data['passengers']}";

        return redirect()->to('https://wa.me/' . $travel->whatsapp . '?text=' . rawurlencode($message));
    }
}
