<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function findByPk(int $id):array
    {
        $admin = User::find($id);
        $admin->toJson();
        return compact('admin');
    }

    public function update($params):array
    {
        $admin = User::find($params['id']);
        $admin['user_id'] = data_get($params, 'user_id', $admin['user_id']);
        $admin['name'] = data_get($params, 'name', $admin['name']);
        if ($params['password']) {
            $admin['password'] = Hash::make($params['password']);
        }
        $admin->save();

        return compact('admin');
    }
}
