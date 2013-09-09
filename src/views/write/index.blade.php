<header>
    <h1>Write Something!</h1>
</header>

<div class="row">
    {{ Form::open(array( 'class'=>'form-horizontal'))}}

        {{ Talk::renderErrors($errors) }}

        <div class="form-group">
            {{ Form::label('title','title',array('class'=>'col-lg-2 control-label'))}}

            <div class="col-lg-10">
                {{ Form::text('title', '', array( 'class' => 'form-control' ) ) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('content','text',array('class'=>'col-lg-2 control-label'))}}

            <div class="col-lg-10">
                {{ Form::textarea('content', '', array( 'class' => 'form-control' ) ) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('category_id','category',array('class'=>'col-lg-2 control-label') ); }}

            <div class="col-lg-10">
                {{ Form::select('category_id', $categories, null, array( 'class' => 'form-control' ) ); }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('tags','Tags', array('class'=>'col-lg-2 control-label') ); }}

            <div class="col-lg-10">
                {{ Form::select('tags', $tags, null, array( 'class' => 'form-control', 'multiple' =>'multiple' ) ); }}
            </div>
        </div>

        <div class="pure-u-1 form-bottom">
            <button type="submit" class="btn btn-success"><i class="icon-plus"></i>Create</button>
        </div>

    {{ Form::close() }}
</div>