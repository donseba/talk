<?php

class TalkReadController extends TalkBaseController {

    public function getIndex()
    {
        return Redirect::to( '/'.Config::get('talk::routes.base').'/list' );
    }

    public function missingMethod( $parameters = array() )
    {
        $post = TalkPost::whereSlug( $parameters[0] )->first();

        $this->layout->content = View::make( 'talk::read.post',compact('post'));
    }

}