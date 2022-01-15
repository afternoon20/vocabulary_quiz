<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GROUPS', function (Blueprint $table) {
            $table->bigIncrements('GROUP_ID');
            $table->string('GROUP_NAME')->nullable(true);
            $table->string('GROUP_NOTE');
            $table->datetime('GROUP_CREATE_AT');
            $table->datetime('GROUP_UPDATE_AT');
            $table->datetime('GROUP_DELETE_AT');
            $table->primary('GROUP_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GROUPS');
    }
}