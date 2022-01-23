<?php

namespace App\Service\System\Admin\Parts\Of;

use App\Repository\Parts\Of\SpeechRepository;
use Illuminate\Http\Request;

class SpeechService
{
    /** @var SpeechRepository */
    public SpeechRepository $speechRepository;
    public $speechService;

    public function __construct()
    {
        $this->speechRepository = new SpeechRepository;
    }

    public function findAll($params):array
    {
        $this->speechService = $this->speechRepository->findAll($params);

        return $this->speechService;
    }
}