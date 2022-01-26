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
            $table->smallInteger('QUIZ_GROUP_ID');
            $table->smallInteger('QUIZ_ORDER')->nullable(false);
            $table->string('QUIZ_PARTS_OF_SPEECH')->nullable(true);
            $table->string('QUIZ_DEFINITE_ARTICLE')->nullable(true);
            $table->string('QUIZ_PHRASE')->nullable(true);
            $table->string('QUIZ_PHRASE_MEAN')->nullable(true);
            $table->string('QUIZ_SENTENSE')->nullable(true);
            $table->string('QUIZ_SENTENSE_MEAN')->nullable(true);
            $table->datetime('QUIZ_CREATED_AT')->nullable(false);
            $table->datetime('QUIZ_UPDATED_AT')->nullable(false);
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
