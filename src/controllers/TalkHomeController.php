<?php

class TalkHomeController extends TalkBaseController {

    public function getIndex()
    {
        $tags       = TalkTag::orderBy('name')->whereActive(1)->get();
        $categories = TalkCategory::orderBy('name')->whereActive(1)->get();

        $posts      = TalkPost::orderBy('created_at', 'DESC')->take(10)->get();

        $this->layout->content = View::make( 'talk::home.index')
            ->with('tags', $tags)
            ->with('posts', $posts)
            ->with('categories', $categories);
    }


    public function missingMethod( $parameters = array() )
    {
        $this->layout->content = 'whoops ;)';
    }
}