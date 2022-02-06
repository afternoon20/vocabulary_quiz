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

    public function update(Request $request)
    {
        $params = $request->all();
        $this->data += $this->quizService->updateGroupAndQuizzes($params);

        return redirect('system/admin/quiz')->with('infoMessages', 'グループ: '. $this->data['group']['GROUP_ID'].'を更新しました');
    }
}
