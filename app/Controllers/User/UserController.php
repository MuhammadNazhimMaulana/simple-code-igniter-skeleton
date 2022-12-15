<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Index User'
        ];

        return view('user/index', $data);
    }

    public function profile($id)
    {
        return view('user/index');
    }
}
