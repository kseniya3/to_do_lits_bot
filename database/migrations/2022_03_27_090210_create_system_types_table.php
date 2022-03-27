<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_types', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('key', 50);
            $table->string('name', 255);
            $table->string('description', 255);
            $table->integer('position')->unsigned()->default(0);
        });

        Schema::table('system_types', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('system_types')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('system_types', function (Blueprint $table) {
            $table->dropForeign(['parent_id']);
        });

        Schema::dropIfExists('system_types');
    }
};
