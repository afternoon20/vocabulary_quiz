<?php

namespace App\Services\System\Admin;

use App\Repositories\QuizRepository;
use Illuminate\Http\Request;

class QuizService
{
    /** @var QuizRepository */
    public QuizRepository $quizRepository;
    public $quizService;

    public function __construct()
    {
        $this->quizRepository = new QuizRepository;
    }

    public function findAll($params):array
    {
        $this->quizService = $this->quizRepository->findAll($params);

        return $this->quizService;
    }
}
