<?php

// app/Controllers/Dashboard.php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('auth/dashboard'); // assuming you placed it in app/Views/auth/dashboard.php
    }
}

