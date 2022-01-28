<?php

namespace App\Repositories;

use App\Models\Quiz;
use App\Repositories\MasterListRepository;

class QuizRepository
{
    /** @var MasterListRepository */
    private $masterListRepository;

    public function __construct()
    {
        $this->masterListRepository = new MasterListRepository();
    }

    public function setMaster()
    {
        return $this->masterListRepository->partsOfSpeech();
    }

    public function find($params):array
    {
        $quizzes = [];
        if (!empty($params['quiz_group_id'])) {
            $quizzes = Quiz::whereIn('QUIZ_GROUP_ID', data_get($params, 'quiz_group_id'))->get();
        } else {
            $quizzes = Quiz::inRandomOrder()->take($params['ramdom_quiz'] !='' ? $params['ramdom_quiz'] : 20)->get();
        }
        if ($quizzes) {
            $quizzes = $quizzes->toArray();
        }

        return compact('quizzes');
    }

    public function findAll($params):array
    {
        $quizzes = Quiz::all();
        $quizzes->toJson();
        return compact('quizzes');
    }

    public function setQuizId($quizzes):array
    {
    }
}
