<header>
    <h1>Create a new User</h1>
</header>
<div class="row">

        {{ Form::open(array('route'=> Config::get('talk::routes.base').'.admin.users.store', 'class'=>'form-horizontal'))}}
        <fieldset>
            <legend>Details</legend>

            {{ Talk::renderErrors($errors) }}

            <div class="form-group">
                {{ Form::label('firstname','firstname',array('class'=>'col-lg-2 control-label'))}}

                <div class="col-lg-10">
                    {{ Form::text('firstname', '', array( 'class' => 'form-control' ) ) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('lastname','lastname',array('class'=>'col-lg-2 control-label'))}}

                <div class="col-lg-10">
                    {{ Form::text('lastname', '', array( 'class' => 'form-control' ) ) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('email','email',array('class'=>'col-lg-2 control-label'))}}

                <div class="col-lg-10">
                {{ Form::email('email', '', array( 'class' => 'form-control' )) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('username','username',array('class'=>'col-lg-2 control-label'))}}

                <div class="col-lg-10">
                {{ Form::text('username', '', array( 'class' => 'form-control' )) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('password','password',array('class'=>'col-lg-2 control-label'))}}

                <div class="col-lg-10">
                {{ Form::text('password', '', array( 'class' => 'form-control' )) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('role','role',array('class'=>'col-lg-2 control-label'))}}

                <div class="col-lg-10">
                    {{ Form::select('role', Config::get('talk::auth.roles'), '', array( 'class' => 'form-control') ) }}
                </div>
            </div>



            <div class="pure-u-1 form-bottom">
                <a href="{{ route( Config::get('talk::routes.base').'.admin.users.index') }}" class="cancel">Cancel</a>
                <button type="submit" class="btn btn-success"><i class="icon-plus"></i>Create</button>
            </div>

        </fieldset>
        {{ Form::close() }}


</div>