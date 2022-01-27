<?php

namespace App\Repositories;

use App\Models\Parts\Of\Speech;

class MasterListRepository
{
    /** @var MaterListRepository */

    public function __construct()
    {
    }

    public function partsOfSpeech(): array
    {
        $results = Speech::where('PARTS_OF_SPEECH_NAME_DELETED_AT', null)->get();
        $parts_of_speeches = [];

        if ($results) {
            foreach ($results as $result) {
                $parts_of_speeches[$result->PARTS_OF_SPEECH_ID] = $result->toArray();
            }
        }
        return compact('parts_of_speeches');
    }
}
