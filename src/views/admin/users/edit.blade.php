<header>
    <h1>Update: {{ $user->username }}</h1>
</header>

<div class="row">
    {{ Form::model($user,array('route'=>array(Config::get('talk::routes.base').'.admin.users.update',$user->id),'method'=>'PATCH','class'=>'form-horizontal'))}}

    {{ Talk::renderErrors($errors) }}

    <div class="form-group">
        {{ Form::label('firstname','firstname',array('class'=>'col-lg-2 control-label'))}}

        <div class="col-lg-10">
            {{ Form::text('firstname', null, array( 'class' => 'form-control' ) ) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('lastname','lastname',array('class'=>'col-lg-2 control-label'))}}

        <div class="col-lg-10">
            {{ Form::text('lastname', null, array( 'class' => 'form-control' ) ) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('email','email',array('class'=>'col-lg-2 control-label'))}}

        <div class="col-lg-10">
            {{ Form::email('email', null, array( 'class' => 'form-control' )) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('username','username',array('class'=>'col-lg-2 control-label'))}}

        <div class="col-lg-10">
            {{ Form::text('username', null, array( 'class' => 'form-control' )) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('new_password','password',array('class'=>'col-lg-2 control-label'))}}

        <div class="col-lg-10">
            {{ Form::text('new_password', null, array( 'class' => 'form-control' )) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('role','role',array('class'=>'col-lg-2 control-label'))}}

        <div class="col-lg-10">
            {{ Form::select('role', Config::get('talk::auth.roles'), null, array( 'class' => 'form-control') ) }}
        </div>
    </div>


    <div class="form-group">
        {{ Form::label('active','active',array('class'=>'col-lg-2 control-label'))}}

        <div class="col-lg-10">
            {{ Form::select('active', array('0' => 'No', '1' => 'Yes'), null, array( 'class' => 'form-control') ) }}
        </div>
    </div>


    <div class="form-group">
        {{ Form::label('banned','banned',array('class'=>'col-lg-2 control-label'))}}

        <div class="col-lg-10">
            {{ Form::select('banned', array('0' => 'No', '1' => 'Yes'), null, array( 'class' => 'form-control') ) }}
        </div>
    </div>



    <div class="pure-u-1 form-bottom">
        <a href="{{ route(Config::get('talk::routes.base').'.admin.users.index') }}" class="cancel">Cancel</a>
        <button type="submit" class="btn btn-success"><i class="icon-edit"></i>Update</button>
    </div>

    {{ Form::close() }}
</div>