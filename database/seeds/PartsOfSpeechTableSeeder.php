<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Parts\Of\Speech;
use Carbon\Carbon;

class PartsOfSpeechTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Speech::truncate();

        $now = Carbon::now();
        $partOfSpeechList =[
            ['PARTS_OF_SPEECH_ID' => 0, 'PARTS_OF_SPEECH_NAME' => 'なし', 'PARTS_OF_SPEECH_NAME_CREATED_AT' => $now = Carbon::now(), 'PARTS_OF_SPEECH_NAME_UPDATED_AT' => $now = Carbon::now()],
            ['PARTS_OF_SPEECH_ID' => 1, 'PARTS_OF_SPEECH_NAME' => '単語', 'PARTS_OF_SPEECH_NAME_CREATED_AT' => $now = Carbon::now(), 'PARTS_OF_SPEECH_NAME_UPDATED_AT' => $now = Carbon::now()],
            ['PARTS_OF_SPEECH_ID' => 2, 'PARTS_OF_SPEECH_NAME' => '助動詞', 'PARTS_OF_SPEECH_NAME_CREATED_AT' => $now = Carbon::now(), 'PARTS_OF_SPEECH_NAME_UPDATED_AT' => $now = Carbon::now()],
            ['PARTS_OF_SPEECH_ID' => 3, 'PARTS_OF_SPEECH_NAME' => '形容詞', 'PARTS_OF_SPEECH_NAME_CREATED_AT' => $now = Carbon::now(), 'PARTS_OF_SPEECH_NAME_UPDATED_AT' => $now = Carbon::now()],
            ['PARTS_OF_SPEECH_ID' => 4, 'PARTS_OF_SPEECH_NAME' => '副詞', 'PARTS_OF_SPEECH_NAME_CREATED_AT' => $now = Carbon::now(), 'PARTS_OF_SPEECH_NAME_UPDATED_AT' => $now = Carbon::now()],
            ['PARTS_OF_SPEECH_ID' => 5, 'PARTS_OF_SPEECH_NAME' => '定冠詞', 'PARTS_OF_SPEECH_NAME_CREATED_AT' => $now = Carbon::now(), 'PARTS_OF_SPEECH_NAME_UPDATED_AT' => $now = Carbon::now()],
            ['PARTS_OF_SPEECH_ID' => 6, 'PARTS_OF_SPEECH_NAME' => '代名詞', 'PARTS_OF_SPEECH_NAME_CREATED_AT' => $now = Carbon::now(), 'PARTS_OF_SPEECH_NAME_UPDATED_AT' => $now = Carbon::now()],
            ['PARTS_OF_SPEECH_ID' => 7, 'PARTS_OF_SPEECH_NAME' => '接続詞', 'PARTS_OF_SPEECH_NAME_CREATED_AT' => $now = Carbon::now(), 'PARTS_OF_SPEECH_NAME_UPDATED_AT' => $now = Carbon::now()],
            ['PARTS_OF_SPEECH_ID' => 8, 'PARTS_OF_SPEECH_NAME' => '前置詞', 'PARTS_OF_SPEECH_NAME_CREATED_AT' => $now = Carbon::now(), 'PARTS_OF_SPEECH_NAME_UPDATED_AT' => $now = Carbon::now()],
            ['PARTS_OF_SPEECH_ID' => 9, 'PARTS_OF_SPEECH_NAME' => '熟語', 'PARTS_OF_SPEECH_NAME_CREATED_AT' => $now = Carbon::now(), 'PARTS_OF_SPEECH_NAME_UPDATED_AT' => $now = Carbon::now()],
            ['PARTS_OF_SPEECH_ID' => 10, 'PARTS_OF_SPEECH_NAME' => '形容詞、副詞', 'PARTS_OF_SPEECH_NAME_CREATED_AT' => $now = Carbon::now(), 'PARTS_OF_SPEECH_NAME_UPDATED_AT' => $now = Carbon::now()],
        ];
        DB::table("PARTS_OF_SPEECHS")->insert($partOfSpeechList);
    }
}
