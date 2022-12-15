<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
		// Creating data
		$users_data = [
			[
				'username' => 'admin',
				'first_name'  => 'first',
				'last_name' => 'admin',
				'email'  => 'firstadmin@gmail.com',
				'password'  => password_hash('demodemo123', PASSWORD_DEFAULT)
			],
			[
				'username' => 'sub_admin',
				'first_name'  => 'second',
				'last_name' => 'admin',
				'email'  => 'secondadmin@gmail.com',
				'password'  => password_hash('demodemo123', PASSWORD_DEFAULT)
			],
		];

		foreach($users_data as $data){
			// Insert All Data
			$this->db->table('users')->insert($data);
		}
    }
}
