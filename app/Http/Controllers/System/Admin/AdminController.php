<?php

namespace App\Http\Controllers\System\Admin;

use App\Http\Controllers\Controller;
use App\Service\System\Admin\AdminService as AdminService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /** @var AdminService  */
    public AdminService $adminService;

    public function __construct()
    {
        $this->adminService = new AdminService();
    }

    public function index(Request $request)
    {
        $params = $request->all();
        $data = $this->adminService->findAll($params);

        return view('system.admin.admin', $data);
    }
}
