<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run()
    {
		// Creating data
		$item_data = [
			[
				'user_id' => 1,
				'item_name'  => 'first item',
			],
			[
				'user_id' => 1,
				'item_name'  => 'second item',
			],
		];

		foreach($item_data as $data){
			// Insert All Data
			$this->db->table('items')->insert($data);
		}
    }
}
