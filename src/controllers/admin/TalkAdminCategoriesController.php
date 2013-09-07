<?php

class TalkAdminCategoriesController extends TalkBaseController{


    public function index()
    {
        $categories = TalkCategory::paginate(15);

        $this->layout->content = View::make( 'talk::admin.categories.index',compact('categories'));
    }


    public function create()
    {
        $this->layout->content = View::make('talk::admin.categories.create');
    }


    public function store()
    {
        $insertArray = Input::only('name', 'slug', 'active');

        unset( $insertArray['_token'] );

        $category = TalkCategory::create( $insertArray );

        if( $category->save() )
        {
            return Redirect::route( Config::get('talk::routes.base').'.admin.categories.index');
        }

        return Redirect::back()->withInput()->withErrors( $category->errors );
    }


    public function show($id)
    {
        $category = TalkCategory::findOrFail($id);

        $this->layout->content = View::make('talk::admin.categories.show',compact('category'));
    }


    public function edit($id)
    {
        $category = TalkCategory::findOrFail($id);

        $this->layout->content = View::make('talk::admin.categories.edit',compact('category'));
    }


    public function update($id)
    {
        $category = TalkCategory::findOrFail($id);

        $updateArray = Input::only('name', 'slug', 'active');


        if( $category->update($updateArray) )
        {
            return Redirect::route( Config::get('talk::routes.base').'.admin.categories.show',$id);
        }

        return Redirect::back()->withInput()->withErrors($category->errors);
    }


    public function destroy($id)
    {
        if(strtoupper( Input::get('delete')) == 'DELETE' ){

            $category = TalkCategory::findOrFail($id);
            $category->delete();

            return Redirect::route( Config::get('talk::routes.base').'.admin.categories.index');
        }

        return Redirect::route( Config::get('talk::routes.base').'.admin.categories.show',$id);
    }
}