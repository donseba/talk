<?php


class TalkAdminPostsController extends TalkBaseController{


    public function index()
    {
        $posts = TalkPost::paginate(15);

        $this->layout->content = View::make( 'talk::admin.posts.index',compact('posts'));
    }



}