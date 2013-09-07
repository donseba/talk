<?php


class TalkAdminUsersController extends TalkBaseController{


    public function index()
    {
        $users = TalkUser::paginate(15);

        $this->layout->content = View::make( 'talk::admin.users.index',compact('users'));
    }


    public function create()
    {
        $this->layout->content = View::make('talk::admin.users.create');
    }


    public function store()
    {
        $insertArray = Input::all();
        $insertArray['password'] = Hash::make( $insertArray['password'] );

        unset( $insertArray['_token'] );

        $user = TalkUser::create( $insertArray );

        if( $user->save() )
        {
            return Redirect::route( Config::get('talk::routes.base').'.admin.users.index');
        }

        return Redirect::back()->withInput()->withErrors( $user->errors );
    }


    public function show($id)
    {
        $user = TalkUser::findOrFail($id);

        $this->layout->content = View::make('talk::admin.users.show',compact('user'));
    }


    public function edit($id)
    {
        $user = TalkUser::findOrFail($id);

        $this->layout->content = View::make('talk::admin.users.edit',compact('user'));
    }


    public function update($id)
    {
        $user = TalkUser::findOrFail($id);

        $updateArray = Input::only('firstname', 'lastname', 'role', 'username', 'email', 'active', 'banned');

        if( Input::has('new_password'))
        {
            $updateArray['password'] = Hash::make( Input::get('new_password') );
        }

        if( $user->update($updateArray) )
        {
            return Redirect::route( Config::get('talk::routes.base').'.admin.users.show',$id);
        }

        return Redirect::back()->withInput()->withErrors($user->errors);
    }


    public function destroy($id)
    {
        if(strtoupper(Input::get('delete')) == 'DELETE'){
            $user = TalkUser::findOrFail($id);
            $user->delete();

            return Redirect::route( Config::get('talk::routes.base').'.admin.users.index');
        }

        return Redirect::route( Config::get('talk::routes.base').'.admin.users.show',$id);
    }
}