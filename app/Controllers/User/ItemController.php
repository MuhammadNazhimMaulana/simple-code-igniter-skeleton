<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ItemModel;

class ItemController extends BaseController
{
	public function __construct() {
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
}
