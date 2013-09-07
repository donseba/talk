<header>
    <h1>Update: {{ $tag->name }}</h1>
</header>

<div class="row">
    {{ Form::model($tag,array('route'=>array(Config::get('talk::routes.base').'.admin.tags.update',$tag->id),'method'=>'PATCH','class'=>'form-horizontal'))}}

    {{ Talk::renderErrors($errors) }}

    <div class="form-group">
        {{ Form::label('name','name',array('class'=>'col-lg-2 control-label'))}}

        <div class="col-lg-10">
            {{ Form::text('name', null, array( 'class' => 'form-control' ) ) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('slug','slug',array('class'=>'col-lg-2 control-label'))}}

        <div class="col-lg-10">
            {{ Form::text('slug', null, array( 'class' => 'form-control' ) ) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('active','active',array('class'=>'col-lg-2 control-label'))}}

        <div class="col-lg-10">
            {{ Form::select('active', array('0' => 'No', '1' => 'Yes'), null, array( 'class' => 'form-control') ) }}
        </div>
    </div>

    <div class="pure-u-1 form-bottom">
        <a href="{{ route(Config::get('talk::routes.base').'.admin.tags.index') }}" class="cancel">Cancel</a>
        <button type="submit" class="btn btn-success"><i class="icon-edit"></i>Update</button>
    </div>

    {{ Form::close() }}
</div>