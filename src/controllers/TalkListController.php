<?php


class TalkListController extends TalkBaseController{

    public function getIndex()
    {
        $posts = TalkPost::orderBy('created_at', 'DESC')->paginate(15);

        $this->layout->content = View::make( 'talk::list.index',compact('posts'));
    }
}