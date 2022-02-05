<?php

namespace App\Http\Controllers\System\Admin;

use App\Http\Controllers\Controller;
use App\Services\System\Admin\AdminService as AdminService;
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

    public function edit(int $id)
    {
        $data = $this->adminService->findByPk($id);

        return view('system.admin.admin.edit', $data);
    }

    public function update(Request $request)
    {
        $params = $request->all();
        $data = $this->adminService->update($params);

        return redirect('system/admin/admin')->with('infoMessages', 'id: '. $data['admin']['id'].'を更新しました');
    }
}
