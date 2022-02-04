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

        return view('system.admin.quiz', $this->data);
    }

    public function edit(int $group_id)
    {
        $this->data += $this->quizService->findGroupAndQuizzes($group_id);

        // var_dump($this->data);
        // exit;
        return view('system.admin.quiz.edit', $this->data);
    }

    public function update(int $group_id, Request $request)
    {
        // $this->data += $this->quizService->findGroupAndQuizzes($group_id);
        $params = $request->all();
        var_dump($params);
        exit;
        return view('system.admin.quiz.edit', $this->data);
    }
}
