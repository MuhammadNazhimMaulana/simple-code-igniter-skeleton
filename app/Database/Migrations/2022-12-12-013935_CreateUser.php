<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);

        // Create primary key
		$this->forge->addKey('id', TRUE);

		// Create tabel
		$this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
