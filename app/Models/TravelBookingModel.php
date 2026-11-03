<?php

namespace App\Models;

use CodeIgniter\Model;

class TravelBookingModel extends Model
{
    protected $DBGroup          = 'travel';
    protected $table            = 'travel_bookings';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'booking_code', 'customer_name', 'phone', 'origin', 'destination',
        'travel_date', 'passengers', 'schedule', 'service', 'status',
    ];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}
