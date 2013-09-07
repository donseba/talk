<?php

use Illuminate\Database\Migrations\Migration;

class CreateTalkTagsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talk_tags', function($table)
        {
            $table->increments('id');
            $table->integer('parent_id')->default(0);
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
        Schema::dropIfExists('talk_tags');
    }

}