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

    public function index($params):array
    {
        //TODO:問題リストを渡す。
        return $this->resultService;
    }
}
