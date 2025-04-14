<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function __construct()
    {
        // Ensure that the user is logged in to access the dashboard
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login'); // Redirect to login if not logged in
        }
    }

    public function index()
    {
        // Return the dashboard view from the 'employee' folder
        return view('employee/dashboard'); // This is your dashboard view
    }
}
