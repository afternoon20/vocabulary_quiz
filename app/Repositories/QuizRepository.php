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

    public function find($params, $select = '*', $key = []):array
    {
        $quizzes = [];
        if (!empty($params['quiz_group_id'])) {
            $quizzes = Quiz::select($select)->whereIn('QUIZ_GROUP_ID', data_get($params, 'quiz_group_id'))->get();
        } elseif (!empty($params['quiz_id'])) {
            $quizzes = Quiz::select($select)->whereIn('QUIZ_ID', data_get($params, 'quiz_id'))->get();
        } else {
            $quizzes = Quiz::select($select)->inRandomOrder()->take($params['ramdom_quiz'] !='' ? $params['ramdom_quiz'] : 20)->get();
        }
        if ($quizzes) {
            $quizzes = $quizzes->toArray();
        }

        if (!empty($key)) {
            $quizzes_tmp =[];
            foreach ($quizzes as $quiz) {
                $quizzes_tmp[$quiz[$key]] = $quiz;
            }
            $quizzes = $quizzes_tmp;
        }

        return compact('quizzes');
    }

    public function findByPk(int $quiz_id):array
    {
        $quiz = Quiz::find($quiz_id);
        $quiz->toArray();
        return compact('quiz');
    }

    public function findAll($params):array
    {
        $quizzes = Quiz::all();
        $quizzes->toJson();
        return compact('quizzes');
    }
}
