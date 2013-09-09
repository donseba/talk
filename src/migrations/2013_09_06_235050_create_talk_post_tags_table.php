<?php

use Illuminate\Database\Migrations\Migration;

class CreateTalkPostTagsTable extends Migration {


    public function up()
    {
        Schema::create('talk_post_tags', function($table) {
            $table->increments('id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->integer('tag_id')->unsigned();
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
        Schema::dropIfExists('talk_posts');
    }
}