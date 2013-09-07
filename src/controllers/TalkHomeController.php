<?php

class TalkHomeController extends TalkBaseController {

    public function getIndex()
    {
        $this->layout->content = 'some home content, with post, list of tags and categories';
    }


    public function missingMethod( $parameters = array() )
    {
        $this->layout->content = 'whoops ;)';
    }
}