<?php

class TalkWriteController extends TalkBaseController{


    public function getIndex()
    {
        // get available Tags
        $tags       = TalkTag::select('id', 'name')->whereActive(1)->lists('name', 'id');

        // get available Categories
        $categories = TalkCategory::select('id', 'name')->whereActive(1)->lists('name', 'id');

        $this->layout->content = View::make( 'talk::write.index')->with('tags', $tags)->with('categories', $categories);
    }


    public function postIndex( $id = 0 )
    {
        $input = (object) Input::only('title', 'content', 'tags', 'category_id');

        // ToDo !! User Input Validation !
        $post               = new TalkPost;
        $post->title        = $input->title;
        $post->content      = $input->content;
        $post->category_id  = $input->category_id;
        $post->parent_id    = 0;
        $post->user_id      = Auth::user()->id;

        if( $post->save() )
        {
            $post->slug = $post->id.'-'.Str::slug($input->title);

            if( $post->save() )
            {
                // ToDo !! Do something with the tags!
                // $tags = Input::only('tags');

                return Redirect::to( Config::get('talk::routes.base').'/read/'.$post->slug );
            }
        }
    }


    public function getReply( $id = 0 )
    {
        $this->layout->content = View::make( 'talk::write.reply');
    }


    public function postReply( $id = 0 )
    {
        $parent = TalkPost::findOrFail( $id );

        if( $parent )
        {
            $input = (object) Input::only('content');

            $post               = new TalkPost;
            $post->title        = '';
            $post->content      = $input->content;
            $post->category_id  = $parent->category_id;
            $post->parent_id    = $parent->id;
            $post->user_id      = Auth::user()->id;
        }

        if( $post->save() )
        {
            return Redirect::to( Config::get('talk::routes.base').'/read/'.$parent->slug.'/#post-'.$post->id );
        }
    }
}