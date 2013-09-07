<?php


class TalkListController extends TalkBaseController{

    public function getIndex(){

        $this->layout->content = 'list of all posts paginated';
    }
}