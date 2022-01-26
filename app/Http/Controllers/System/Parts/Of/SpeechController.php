<?php

namespace App\Http\Controllers\System\Parts\Of;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\System\Admin\Parts\Of\SpeechService as SpeechService;

class SpeechController extends Controller
{
    /** @var SpeechService */
    public SpeechService $speechService;

    public function __construct()
    {
        $data =[];
        $this->speechService = new SpeechService();
    }

    public function index(Request $request)
    {
        $params = $request->all();
        $data = $this->speechService->findAll($params);
        return view('system.admin.parts.of.speech', $data);
    }
}
