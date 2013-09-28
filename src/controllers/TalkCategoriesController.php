<?php


class TalkCategoriesController extends TalkBaseController{


    public function getIndex()
    {
        $categories = TalkCategory::orderBy('name')->whereActive(1)->get();

        $this->layout->content = View::make( 'talk::categories.index',compact('categories'));
    }


    public function missingMethod( $parameters = array() )
    {
        $category = TalkCategory::whereSlug( $parameters[0] )->whereActive(1)->first();

        $posts = null;
        if( null != $category )
        {
            $posts = $category->posts()->whereParent_id(0)->paginate(15);
        }

        $this->layout->content = View::make( 'talk::categories.list',compact('posts'))->with('category', $category);
    }
}