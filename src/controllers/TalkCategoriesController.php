<?php


class TalkCategoriesController extends TalkBaseController{


    public function getIndex()
    {
        $categories = TalkCategory::orderBy('name')->whereActive(1)->get();

        $this->layout->content = View::make( 'talk::categories.index',compact('categories'));
    }


    public function missingMethod( $parameters = array() )
    {
        $this->layout->content = 'Get posts by category with slug <strong>'.$parameters[0].'</strong>';
    }
}