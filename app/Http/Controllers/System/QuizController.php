<?php


namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\System\Admin\QuizService;

class QuizController extends Controller
{

    /** @var QuizService  */
    public QuizService $quizService;

    public function __construct()
    {
        $data =[];
        $this->quizService = new QuizService();
    }

    public function index(Request $request)
    {
        $params = $request->all();
        $data = $this->quizService->findAll($params);

        return view('system.admin.quiz', $data);
    }
}
