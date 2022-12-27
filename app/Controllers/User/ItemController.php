<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ItemModel;

class ItemController extends BaseController
{
	public function __construct() {
        //load helper form and URL
        helper(['form', 'url']);

		$this->item_model = new ItemModel();
	}

    public function index()
    {
        $data = [
            'title' => 'Index Item',
            'items' => $this->item_model->getItems()
        ];

        return view('item/index', $data);
    }

    public function create()
    {
        // Validation
        $validation = $this->validate([
            'item_name' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Masukkan Nama Item'
                ]
            ]
        ]);

        // If Validation Pass
        if($validation){
            
            // Prepare Inserted Data
            $data = [
				'item_name' => $this->request->getPost('item_name'),
				'user_id' => 1
        	];

            // Save The Data
            $save = $this->item_model->save_item($data);

            if($save){
                $response = array(
					'status' => true,
        			'message' => 'Data saved successfully'
        		);
            }
        }else{
            $response = array(
                'status' => true,
                'message' => 'Gagal'
            );
        }

        return json_encode($response);
    }
}
