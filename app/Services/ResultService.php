<?php

namespace App\Services;

use App\Repositories\QuizRepository;
use Illuminate\Http\Request;

class ResultService
{
    /** @var QuizRepository */
    public QuizRepository $quizRepository;
    public $resultService;

    public function __construct()
    {
        $this->quizRepository = new QuizRepository;
    }

    public function fetch($params):array
    {
        $params['quiz_id'] = session('quizList');
        $this->resultService =  $this->quizRepository->find($params);
        $this->resultService['isCorrectList'] = session('isCorrectList');
        return $this->resultService;
    }
}
