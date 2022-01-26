<?php

namespace App\Repositories;

use App\Models\Quiz;

class QuizRepository
{
    /** @var QuizRepository */

    public function __construct()
    {
    }

    public function setMaster(&$data)
    {
    }


    public function findAll($params):array
    {
        $quizzes = Quiz::all();
        $quizzes->toJson();
        return compact('quizzes');
    }
}
