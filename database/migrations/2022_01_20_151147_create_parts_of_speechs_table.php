<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsOfSpeechsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PARTS_OF_SPEECHS', function (Blueprint $table) {
            $table->smallInteger('PARTS_OF_SPEECH_ID');
            $table->string('PARTS_OF_SPEECH_NAME');
            $table->datetime('PARTS_OF_SPEECH_NAME_CREATE_AT');
            $table->datetime('PARTS_OF_SPEECH_NAME_UPDATE_AT');
            $table->datetime('PARTS_OF_SPEECH_NAME_DELETE_AT')->nullable(true);
            $table->primary('PARTS_OF_SPEECH_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PARTS_OF_SPEECHS');
    }
}
