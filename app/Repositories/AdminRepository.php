<?php

namespace App\Repositories;

use App\Models\User;

class AdminRepository
{
    public function __construct()
    {
    }

    public function findAll($params):array
    {
        $admins = User::all();
        $admins->toJson();
        return compact('admins');
    }
}
