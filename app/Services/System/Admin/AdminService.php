<?php

namespace App\Services\System\Admin;

use App\Repositories\AdminRepository;
use Illuminate\Http\Request;

class AdminService
{
    /** @var AdminRepository */
    public AdminRepository $adminRepository;
    public $adminService;

    public function __construct()
    {
        $this->adminRepository = new AdminRepository();
    }

    public function findAll($params):array
    {
        $this->adminService = $this->adminRepository->findAll($params);

        return $this->adminService;
    }

    public function findByPk(int $id):array
    {
        $this->adminService = $this->adminRepository->findByPk($id);

        return $this->adminService;
    }

    public function update($params):array
    {
        $this->adminService = $this->adminRepository->update($params);

        return $this->adminService;
    }
}
