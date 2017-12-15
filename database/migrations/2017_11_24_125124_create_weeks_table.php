<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id');
            $table->integer('user_id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('about')->nullable();
            $table->string('exercise')->nullable();
            $table->string('self_realization')->nullable();
            $table->string('wisdome_title')->nullable();
            $table->string('healthy_mind_title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weeks');
    }
}