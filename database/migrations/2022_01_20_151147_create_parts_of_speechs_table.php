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
            $table->smallInteger('PARTS_OF_SPEECHS_ID');
            $table->string('PARTS_OF_SPEECHS_NAME');
            $table->datetime('PARTS_OF_SPEECHS_NAME_CREATE_AT');
            $table->datetime('PARTS_OF_SPEECHS_NAME_UPDATE_AT');
            $table->datetime('PARTS_OF_SPEECHS_NAME_DELETE_AT');

            $table->timestamps();
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
