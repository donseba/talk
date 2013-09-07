<?php

use Illuminate\Database\Migrations\Migration;

class CreateTalkUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talk_users', function($table)
        {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password',60);
            $table->string('email')->unique()->nullable()->default(null);
            $table->string('firstname');
            $table->string('lastname');

            $table->integer('role')->default(0);

            $table->boolean('active', 0);
            $table->boolean('banned', 0);
            $table->datetime('last_login')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talk_users');
    }

}