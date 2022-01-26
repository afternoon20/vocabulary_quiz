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
            $table->string('GROUP_NAME')->nullable(false);
            $table->string('GROUP_NOTE')->nullable(true);
            $table->datetime('GROUP_CREATED_AT');
            $table->datetime('GROUP_UPDATED_AT');
            $table->datetime('GROUP_DELETED_AT')->nullable(true);
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
