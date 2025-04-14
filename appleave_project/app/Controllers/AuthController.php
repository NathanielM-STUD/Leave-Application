<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
     public function index()
    {
        return view('employee/dashboard');
    }

<<<<<<< HEAD
    public function registerProcess()
=======

    public function __construct()
>>>>>>> be1d63d819cd591449917789ec865a99a23245cf
    {
        // Ensure that only non-logged-in users can access register and login pages
        if (session()->get('is_logged_in')) {
            return redirect()->to('/dashboard');  // Redirect to dashboard or home if logged in
        }
    }

    public function register()
    {
        // This method will now only be available to users who are not logged in
        return view('auth/register');
    }

    public function login()
    {
        // Log if login is accessed
        log_message('info', 'Login page accessed');
        return view('auth/login');
    }
    

<<<<<<< HEAD
    public function loginProcess()
=======
    public function createUser()
{
    // Get input data
    $name = $this->request->getPost('name');
    $gender = $this->request->getPost('gender');
    $position = $this->request->getPost('position');
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    $confirmPassword = $this->request->getPost('confirm_password');

    // Validate inputs
    if ($password !== $confirmPassword) {
        return redirect()->back()->with('error', 'Passwords do not match');
    }

    // Password pattern: 6 letters and 2 numbers
    if (!preg_match('/^(?=.*[A-Za-z]{6,})(?=.*\d{2,})/', $password)) {
        return redirect()->back()->with('error', 'Password must contain at least 6 letters and 2 numbers');
    }

    $userModel = new UserModel();

    // Check if email already exists
    if ($userModel->where('email', $email)->first()) {
        return redirect()->back()->with('error', 'Email already registered');
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Create the user
    if (!$userModel->save([
        'name' => $name,
        'gender' => $gender,
        'position' => $position,
        'email' => $email,
        'password' => $hashedPassword,
    ])) {
        return redirect()->back()->with('error', 'There was an issue saving your data. Please try again.');
    }

    // Log the successful registration and redirect
    log_message('debug', 'User registration successful, redirecting to login.');

    return redirect()->to('/login')->with('success', 'Registration successful! You can now log in.');
}


    public function authenticate()
>>>>>>> be1d63d819cd591449917789ec865a99a23245cf
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();

        // Find user by email
        $user = $userModel->where('email', $email)->first();

        if (!$user || !password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Invalid email or password');
        }

        // Set session data and log in the user
        session()->set([
            'user_id' => $user['id'],
            'user_name' => $user['name'],
            'user_email' => $user['email'],
            'is_logged_in' => true,
        ]);

        return redirect()->to('/dashboard');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
