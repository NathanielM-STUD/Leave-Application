<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['fullname', 'username', 'email', 'password', 'role', 'created_at'];
    protected $useTimestamps = true;
}
