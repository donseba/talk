<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sebastiano
 * Date: 07-09-13
 * Time: 00:06
 * To change this template use File | Settings | File Templates.
 */

class TalkAuthController extends TalkBaseController{


    public function getIndex()
    {
        $this->layout->content = 'some auth content';
    }


    public function getLogin()
    {
        $this->layout->content = View::make( 'talk::auth.login' );
    }


    public function postLogin()
    {
        $remember = ( Input::has('remember') ? true : false );

        if( Auth::attempt(array('username' => Input::get('username'),'password'=>Input::get('password')),$remember) )
        {
            Auth::user()->last_login = Auth::user()->freshTimestamp();
            Auth::user()->save();

            return Redirect::to( Config::get('talk::routes.base') );
        }

        $this->layout->content = View::make( 'talk::auth.login' )->with('status','failed');
    }


    public function postIndex()
    {

    }


    public function getLogout()
    {

        Auth::logout();
        Session::flush();

        return Redirect::to( Config::get('talk::routes.base') );

    }
}