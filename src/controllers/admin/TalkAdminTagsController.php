<?php

class TalkAdminTagsController extends TalkBaseController{


    public function index()
    {
        $tags = TalkTag::paginate(15);

        $this->layout->content = View::make( 'talk::admin.tags.index',compact('tags'));
    }


    public function create()
    {
        $this->layout->content = View::make('talk::admin.tags.create');
    }


    public function store()
    {
        $insertArray = Input::only('name', 'slug', 'active');

        unset( $insertArray['_token'] );

        $tag = TalkTag::create( $insertArray );

        if( $tag->save() )
        {
            return Redirect::route( Config::get('talk::routes.base').'.admin.tags.index');
        }

        return Redirect::back()->withInput()->withErrors( $tag->errors );
    }


    public function show($id)
    {
        $tag = TalkTag::findOrFail($id);

        $this->layout->content = View::make('talk::admin.tags.show',compact('tag'));
    }


    public function edit($id)
    {
        $tag = TalkTag::findOrFail($id);

        $this->layout->content = View::make('talk::admin.tags.edit',compact('tag'));
    }


    public function update($id)
    {
        $tag = TalkTag::findOrFail($id);

        $updateArray = Input::only('name', 'slug', 'active');


        if( $tag->update($updateArray) )
        {
            return Redirect::route( Config::get('talk::routes.base').'.admin.tags.show',$id);
        }

        return Redirect::back()->withInput()->withErrors($tag->errors);
    }


    public function destroy($id)
    {
        if(strtoupper( Input::get('delete')) == 'DELETE' ){

            $tag = TalkTag::findOrFail($id);
            $tag->delete();

            return Redirect::route( Config::get('talk::routes.base').'.admin.tags.index');
        }

        return Redirect::route( Config::get('talk::routes.base').'.admin.tags.show',$id);
    }
}