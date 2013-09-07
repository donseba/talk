<header>
    <h1>Create a new Category</h1>
</header>
<div class="row">

        {{ Form::open(array('route'=> Config::get('talk::routes.base').'.admin.categories.store', 'class'=>'form-horizontal'))}}
        <fieldset>
            <legend>Details</legend>

            {{ Talk::renderErrors($errors) }}

            <div class="form-group">
                {{ Form::label('name','name',array('class'=>'col-lg-2 control-label'))}}

                <div class="col-lg-10">
                    {{ Form::text('name', '', array( 'class' => 'form-control' ) ) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('slug','slug',array('class'=>'col-lg-2 control-label'))}}

                <div class="col-lg-10">
                    {{ Form::text('slug', '', array( 'class' => 'form-control' ) ) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('active','active',array('class'=>'col-lg-2 control-label'))}}

                <div class="col-lg-10">
                    {{ Form::select('active', array('0' => 'No', '1' => 'Yes'), null, array( 'class' => 'form-control') ) }}
                </div>
            </div>



            <div class="pure-u-1 form-bottom">
                <a href="{{ route( Config::get('talk::routes.base').'.admin.categories.index') }}" class="cancel">Cancel</a>
                <button type="submit" class="btn btn-success"><i class="icon-plus"></i>Create</button>
            </div>

        </fieldset>
        {{ Form::close() }}


</div>