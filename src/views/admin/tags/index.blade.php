<header>
    <h1>
        Tags
        <a href="{{ route(Config::get('talk::routes.base').'.admin.tags.create') }}" class="btn btn-success pull-right">New Tags</a>
    </h1>
</header>

<div class="row">
    <div class="pure-u-1">

        @unless($tags)

        <div class="bs-callout bs-callout-danger">
            <h4>No Tags!</h4>
        </div>

        @else

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>slug</th>
                    <th>active</th>
                    <th>options</th>
                </tr>
            </thead>

            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->slug }}</td>
                    <td>{{ $tag->active }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ URL::route(Config::get('talk::routes.base').'.admin.tags.show',$tag->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ URL::route(Config::get('talk::routes.base').'.admin.tags.edit',$tag->id) }}" class="btn btn-success">Edit</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $tags->links() }}
        @endunless
    </div>
</div>