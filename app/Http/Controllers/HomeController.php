<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HomeService;

class HomeController extends Controller
{
    /** @var HomeService  */
    private HomeService $homeService;

    public function __construct()
    {
        $this->homeService = new HomeService();
    }

    public function index(Request $request)
    {
        $params = $request->all();
        $data = $this->homeService->findAll($params);
        return view('index', $data);
    }
}
