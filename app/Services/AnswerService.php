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
        if (session()->has('quizList') || session()->has('isCorrectList') || session()->has('current') || session()->has('total')) {
            session()->forget('quizList');
            session()->forget('isCorrectList');
            session()->forget('current');
            session()->forget('total');
        }

        $quizIds = $this->quizRepository->find($params, 'QUIZ_ID');
        $quizList = [];
        foreach ($quizIds['quizzes'] as $quizId) {
            array_push($quizList, $quizId['QUIZ_ID']);
        }

        $this->answerService = $this->quizRepository->findByPk($quizList[0]);
        
        $isCorrectList =[];
        //session set
        session(['quizList' => $quizList]);
        session(['isCorrectList' => $isCorrectList]);
        session(['isCorrectList' => $isCorrectList]);
        session(['current' => 1]);
        session(['total' => count($quizList)]);

        return $this->answerService;
    }

    public function advanceQuizzes($params):array
    {
        session()->push('isCorrectList', $params['quiz_answer']);
        if (count(session('isCorrectList')) < count(session('quizList'))) {
            $quizId = session('quizList')[count(session('isCorrectList'))];
        
            $data = $this->quizRepository->findByPk($quizId);
            $this->answerService = ['definite-article' => data_get($data['quiz'], 'QUIZ_DEFINITE_ARTICLE'),
                'phrase' => $data['quiz']['QUIZ_PHRASE'],
                'sentense' => $data['quiz']['QUIZ_SENTENSE'],
                'definite-article' => $data['quiz']['QUIZ_DEFINITE_ARTICLE'],
                'current' => count(session('isCorrectList')) + 1,
                'total' => count(session('quizList'))
            ];
        } else {
            $this->answerService = ['current' => count(session('isCorrectList')) + 1,
                'total' => count(session('quizList'))
            ];
        }
    
        return $this->answerService;
    }
}
