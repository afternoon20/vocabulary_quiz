<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('QUIZZES', function (Blueprint $table) {
            $table->bigIncrements('QUIZ_ID');
            $table->string('QUIZ_GROUP_ID')->nullable(true);
            $table->string('QUIZ_DEFINITE_ARTICLE');
            $table->string('QUIZ_PHRASE');
            $table->string('QUIZ_PHRASE_MEAN');
            $table->string('QUIZ_SENTENSE');
            $table->string('QUIZ_SENTENSE_MEAN');
            $table->datetime('QUIZ_CREATE_AT');
            $table->datetime('QUIZ_UPDATE_AT');
            $table->datetime('QUIZ_DELETE_AT');
            $table->primary('QUIZ_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('QUIZZES');
    }
}
