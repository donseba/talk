<div class="form-register well">
    {{ Form::open(array('url'=> $talkRoute.'/auth/register')) }}
    <h2 class="form-signin-heading">Please sign in</h2>
    {{ ( isset($status) ? $status : '') }}

    {{ Form::text('username', Input::old('username') , array('class' => 'form-control', 'placeholder' => 'username' ) ) }}
    {{ Form::text('email', Input::old('email') , array('class' => 'form-control', 'placeholder' => 'email' ) ) }}
    <br>
    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'password' ) ) }}
    {{ Form::password('password_confirm', array('class' => 'form-control', 'placeholder' => 'password confirm' ) ) }}

    <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
    {{ Form::close() }}
</div>
