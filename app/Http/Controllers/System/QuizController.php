<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        return view('system.admin.quiz');
    }
}
