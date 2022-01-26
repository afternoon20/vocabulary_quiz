<?php

namespace App\Service\System\Admin;

use App\Repository\AdminRepository;
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
}
