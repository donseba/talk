<div class="form-signin well">
    {{ Form::open(array('url'=> $talkRoute.'/auth/login')) }}
        <h2 class="form-signin-heading">Please sign in</h2>
        {{ ( isset($status) ? $status : '') }}

        {{ Form::text('username', Input::old('username') , array('class' => 'form-control', 'placeholder' => 'username' ) ) }}
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'password' ) ) }}

        <label class="checkbox">
            <input type="checkbox" value="remember"> Remember me
        </label>

        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
    {{ Form::close() }}
</div>
