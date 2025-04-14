<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerPost()
    {
        $session = session();
        $model = new UserModel();

        // Define validation rules
        $rules = [
            'fullname' => 'required|min_length[3]|max_length[100]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
            'password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]',
        ];

        // Validate the input data
        if (!$this->validate($rules)) {
            // Validation failed, redirect back with errors
            return redirect()->back()->withInput()->with('error', 'Please fill in all fields correctly.');
        }

        // Validation passed, proceed with registration
        $data = [
            'fullname' => $this->request->getPost('fullname'),
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        if ($model->save($data)) {
            // Registration successful
            $session->setFlashdata('success', 'Registration successful! You can now log in.');
            return redirect()->to('/login');
        } else {
            // Registration failed
            $session->setFlashdata('error', 'Registration failed. Please try again.');
            return redirect()->back()->withInput();
        }
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $raw_password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        if ($user && password_verify($raw_password, $user['password'])) {
            $session->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'logged_in' => true
            ]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
