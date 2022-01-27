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


    public function findAll($params):array
    {
        $quizzes = Quiz::all();
        $quizzes->toJson();
        return compact('quizzes');
    }
}
