<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function __construct() {
		helper(['form']);
        $this->session = session();
	}

    public function login()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Register'
        ];

        return view('auth/register', $data);
    }

    public function process_login()
    {

        $model = new UserModel();

        // Getting Data
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // Find Duplicate
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){

                // Prepare Session Data
                $session_data = [
                    'user_id' => $data['id'],
                    'username' => $data['username'],
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'email' => $data['email'],
                    'logged_in'     => TRUE
                ];

                // Set Session Data
                $this->session->set($session_data);

                // Return to Dashboard
                return redirect()->to('/api/user');
            }else{
                $this->session->setFlashdata('msg', 'Email or Password Incorrect');
                return redirect()->to('/auth/login');
            }
        }else{
            $this->session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/auth/login');
        }
    }

    public function process_register()
    {
        //set rules validation form
        $rules = [
            'username' => 'required|min_length[3]|max_length[20]',
            'first_name' => 'required|min_length[3]|max_length[20]',
            'last_name' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]|max_length[200]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'username'     => $this->request->getVar('username'),
                'first_name'     => $this->request->getVar('first_name'),
                'last_name'     => $this->request->getVar('last_name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            $this->session->setFlashdata('register', 'Data Registered');
            return redirect()->to('/auth/login');
        }else{
            $this->session->setFlashdata('msg_register', $this->validator->listErrors());
            return redirect()->to('/auth/register');
        }
         
    }

}
