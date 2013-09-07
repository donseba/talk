<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sebastiano
 * Date: 07-09-13
 * Time: 13:20
 * To change this template use File | Settings | File Templates.
 */

class TalkTagsController extends TalkBaseController{


    public function getIndex()
    {
        $tags = TalkTag::orderBy('name')->whereActive(1)->get();

        $this->layout->content = View::make( 'talk::tags.index',compact('tags'));
    }


    public function missingMethod( $parameters = array() )
    {
        $this->layout->content = 'Get posts by tag with slug <strong>'.$parameters[0].'</strong>';
    }
}