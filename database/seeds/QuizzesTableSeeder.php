<?php

use Illuminate\Database\Seeder;
use App\Models\Group;
use App\Models\Quiz;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = new SplFileObject('storage/app/private/import/vocabularyList.csv');
        $file->setFlags(
            \SplFileObject::READ_CSV |
            \SplFileObject::READ_AHEAD |
            \SplFileObject::SKIP_EMPTY |
            \SplFileObject::DROP_NEW_LINE
        );

        Quiz::truncate();
        Group::truncate();
        $list = [];
        $quizGroupId = 0;
        $i = 21;
        foreach ($file as $row) {
            $row = mb_convert_encoding($row, 'UTF-8');
            $now = Carbon::now();
            if ($i > 20) {
                $group =Group::create([
                    'GROUP_NAME' => $now,
                    'GROUP_NOTE' => '',
                ]);
                $group->save();
                $i = 1;
            }
            $quizGroupId = Group::max('GROUP_ID');

            $list[] = [
                'QUIZ_GROUP_ID' => $quizGroupId,
                'QUIZ_ORDER' => $i,
                'QUIZ_PARTS_OF_SPEECH' =>  $row[0] ?? '',
                'QUIZ_DEFINITE_ARTICLE' => $row[1] ?? '',
                'QUIZ_PHRASE' => $row[2] ?? '',
                'QUIZ_PHRASE_MEAN' => $row[3]  ?? '',
                'QUIZ_SENTENSE' => $row[4]  ?? '',
                'QUIZ_SENTENSE_MEAN' => $row[5]  ?? '',
                'QUIZ_CREATED_AT' => $now,
                'QUIZ_UPDATED_AT' => $now,
            ];
            ++$i;
        }

        DB::table("QUIZZES")->insert($list);
    }
}
