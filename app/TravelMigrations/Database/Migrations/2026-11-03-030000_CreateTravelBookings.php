<?php

namespace TravelMigrations\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTravelBookings extends Migration
{
    protected $DBGroup = 'travel';

    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'BIGINT', 'unsigned' => true, 'auto_increment' => true],
            'booking_code'  => ['type' => 'VARCHAR', 'constraint' => 16],
            'customer_name' => ['type' => 'VARCHAR', 'constraint' => 120],
            'phone'         => ['type' => 'VARCHAR', 'constraint' => 24],
            'origin'        => ['type' => 'VARCHAR', 'constraint' => 80],
            'destination'   => ['type' => 'VARCHAR', 'constraint' => 80],
            'travel_date'   => ['type' => 'DATE'],
            'passengers'    => ['type' => 'SMALLINT', 'unsigned' => true],
            'schedule'      => ['type' => 'VARCHAR', 'constraint' => 20],
            'service'       => ['type' => 'VARCHAR', 'constraint' => 40],
            'status'        => ['type' => 'VARCHAR', 'constraint' => 20, 'default' => 'pending'],
            'created_at'    => ['type' => 'DATETIME', 'null' => true],
            'updated_at'    => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('booking_code');
        $this->forge->addKey('travel_date');
        $this->forge->addKey('status');
        $this->forge->createTable('travel_bookings', true);
    }

    public function down()
    {
        $this->forge->dropTable('travel_bookings', true);
    }
}
