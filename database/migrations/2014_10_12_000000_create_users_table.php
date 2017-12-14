<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
			$table->string('first_name', 50);
			$table->string('last_name', 50);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->string('birthdate', 50);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('phone')->unsigned()->nullable();
            $table->integer('is_subscribed', 2)->unsigned()->default(0);
            $table->integer('m_week',3)->unsigned()->default(0);
            $table->timestamp('last_s_start')->nullable();
            $table->timestamp('last_s_exp')->nullable();
            $table->integer('active',2)->unsigned()->default(0);
            $table->string('token', 250);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
