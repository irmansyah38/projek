<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'foods_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'foods_type' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'foods_title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'price' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('foods_id', true);
        $this->forge->createTable('foods');
    }

    public function down()
    {
        $this->forge->dropTable('foods');
    }
}
