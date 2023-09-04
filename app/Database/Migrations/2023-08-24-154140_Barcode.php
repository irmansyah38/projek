<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barcode extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'barcode_id' => [
                'type'           => 'VARCHAR',
                'constraint'     => 16
            ],
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11
            ],
            'jumhlah_orang' => [
                'type'           => 'INT',
                'constraint'     => 10
            ],
            'barcode_image' => [
                'type'       => 'VARCHAR',
                'constraint' => '5000',
            ],
            'created_at' => [
                'type' => 'DATETIME',

            ],
            'updated_at' => [
                'type' => 'DATETIME',

            ]
        ]);

        $this->forge->addKey('id_barcode', true);
        $this->forge->createTable('barcode');
    }

    public function down()
    {
        $this->forge->dropTable('barcode');
    }
}
