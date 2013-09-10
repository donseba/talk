<?php

class TalkUsersController extends TalkBaseController{


    public function getIndex()
    {
        $users = TalkUser::orderBy('username')->whereActive(1)->get();

        $this->layout->content = View::make( 'talk::users.index',compact('users'));
    }


    public function missingMethod( $parameters = array() )
    {
        $user = TalkUser::findOrFail($parameters[0]);

        $this->layout->content = View::make('talk::users.show',compact('user'));
    }

}