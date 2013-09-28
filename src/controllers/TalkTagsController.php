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


//    public function missingMethod( $parameters = array() )
//    {
//        $this->layout->content = 'Get posts by tag with slug <strong>'.$parameters[0].'</strong>';
//    }

    public function missingMethod( $parameters = array() )
    {
        $tag = TalkTag::whereSlug( $parameters[0] )->whereActive(1)->first();

        $posts = null;
        if( null != $tag )
        {
            $posts = $tag->posts()->whereParent_id(0)->paginate(15);
        }

        $this->layout->content = View::make( 'talk::tags.list',compact('posts'))->with('tag', $tag);
    }
}