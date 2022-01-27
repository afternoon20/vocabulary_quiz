<?php


namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\System\Admin\QuizService;

class QuizController extends Controller
{

    /** @var QuizService  */
    private QuizService $quizService;
    private $data;

    public function __construct()
    {
        $this->quizService = new QuizService($this->data);
    }

    public function index(Request $request)
    {
        $params = $request->all();
        $this->data['params'] = $params;
        $this->data += $this->quizService->findAll($params);
        // var_dump($this->data);
        // exit;

        return view('system.admin.quiz', $this->data);
    }
}
