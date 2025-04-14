<?php

namespace App\Controllers;

class Employee extends BaseController
{
    public function dashboard()
    {
        return view('employee/dashboard');
    }
}
