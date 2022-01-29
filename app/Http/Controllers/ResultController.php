<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ResultService;

class ResultController extends Controller
{
    /** @var ResultService  */
    private ResultService $resultService;

    public function __construct()
    {
        $this->resultService = new ResultService();
    }

    public function index(Request $request)
    {
        $params = $request->all();
        $data = $this->resultService->createQuizzes($params);
        return view('result', $data);
    }
}
