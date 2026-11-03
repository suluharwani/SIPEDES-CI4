<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKegiatanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'title'     => ['type' => 'VARCHAR', 'constraint' => 255],
            'pj'        => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'waktu'     => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'lokasi'    => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'sumber'    => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'status'    => ['type' => 'VARCHAR', 'constraint' => 50, 'default' => 'rencana'],
            'laporan'   => ['type' => 'TEXT', 'null' => true],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kegiatan');
    }

    public function down()
    {
        $this->forge->dropTable('kegiatan');
    }
}
