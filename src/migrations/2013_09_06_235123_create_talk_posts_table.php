<?php

use Illuminate\Database\Migrations\Migration;

class CreateTalkPostsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talk_posts', function($table)
        {
            $table->increments('id');
            $table->integer('parent_id')->default(0);
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('content');

            $table->boolean('flagged', 0);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign( 'user_id' )->references( 'id' )->on( 'talk_users' );
            $table->foreign( 'category_id' )->references( 'id' )->on( 'talk_categories' );
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