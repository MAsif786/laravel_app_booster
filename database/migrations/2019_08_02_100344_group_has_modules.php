<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupHasModules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupHasModules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_group_id')->unsigned();
            $table->foreign('user_group_id')
              ->references('id')->on('user_groups')
              ->onDelete('cascade');
            $table->integer('module_id');
            $table->foreign('module_id')
              ->references('id')->on('sub_modules')
              ->onDelete('cascade');
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
        Schema::dropIfExists('groupHasModules');
    }
}
