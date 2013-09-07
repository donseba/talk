<?php

class TalkUsersController extends TalkBaseController{


    public function getIndex()
    {
        $users = TalkUser::orderBy('username')->whereActive(1)->get();

        $this->layout->content = View::make( 'talk::users.index',compact('users'));
    }


    public function getView( $id = 0 )
    {
        $user = TalkUser::findOrFail($id);

        $this->layout->content = View::make('talk::users.show',compact('user'));
    }

}