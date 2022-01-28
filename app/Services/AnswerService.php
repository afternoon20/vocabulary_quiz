<?php

namespace App\Services;

use App\Repositories\QuizRepository;
use Illuminate\Http\Request;

class AnswerService
{
    /** @var QuizRepository */
    public QuizRepository $quizRepository;
    public $answerService;

    public function __construct()
    {
        $this->quizRepository = new QuizRepository;
    }

    public function createQuizzes($params):array
    {
        $this->answerService = $this->quizRepository->find($params);
        //TODO:クイズIDだけをもつ配列の作成

        return $this->answerService;
    }
}
