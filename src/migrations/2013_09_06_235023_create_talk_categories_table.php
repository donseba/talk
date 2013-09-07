<?php

use Illuminate\Database\Migrations\Migration;

class CreateTalkCategoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talk_categories', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->boolean('active', 0);
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
        Schema::dropIfExists('talk_categories');
    }

}