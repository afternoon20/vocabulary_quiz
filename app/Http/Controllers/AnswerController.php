<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AnswerService;

class AnswerController extends Controller
{
    /** @var AnswerService  */
    private AnswerService $answerService;

    public function __construct()
    {
        $this->answerService = new AnswerService();
    }

    public function index(Request $request)
    {
        $params = $request->all();
        $data = $this->answerService->createQuizzes($params);
        return view('answer', $data);
    }

    public function advance(Request $request)
    {
        $params = $request->all();
        $data = $this->answerService->advanceQuizzes($params);
        return response()->json($data);
    }
}
