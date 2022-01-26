<?php

namespace App\Repositories\Parts\Of;

use App\Models\Parts\Of\Speech;

class SpeechRepository
{
    /** @var SpeechRepository */

    public function __construct()
    {
    }

    public function findAll($params):array
    {
        $speechs = Speech::all();
        $speechs->toJson();
        return compact('speechs');
    }
}
