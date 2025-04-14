<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function register()
    {
        return view('auth/register');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function createUser()
    {
        $name = $this->request->getPost('name');
        $gender = $this->request->getPost('gender');
        $position = $this->request->getPost('position');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');

        if ($password !== $confirmPassword) {
            return redirect()->back()->with('error', 'Passwords do not match');
        }

        if (!preg_match('/^(?=(?:.*[A-Za-z]){6,})(?=(?:.*\d){2,}).+$/', $password)) {
            return redirect()->back()->with('error', 'Password must contain at least 6 letters and 2 numbers');
        }

        $userModel = new UserModel();

        if ($userModel->where('email', $email)->first()) {
            return redirect()->back()->with('error', 'Email already exists');
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $userModel->save([
            'name' => $name,
            'gender' => $gender,
            'position' => $position,
            'email' => $email,
            'password' => $hashedPassword,
        ]);

        return redirect()->to('/login')->with('success', 'Registration successful!');
    }

    public function authenticate()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Set session
            session()->set([
                'user_id'   => $user['id'],
                'email'     => $user['email'],
                'logged_in' => true,
            ]);

            // ✅ Redirect to employee dashboard
            return redirect()->to('/employee/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function welcome()
    {
        return view('auth/welcome');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
