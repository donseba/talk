<header>
    <h1>
        Posts
    </h1>
</header>

<div class="row">
    <div class="pure-u-1">

        @unless($posts)

        <div class="bs-callout bs-callout-danger">
            <h4>No posts, yet! OGM get some friends!</h4>
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
            @foreach( $posts as $post )
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->active }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ URL::route(Config::get('talk::routes.base').'.admin.posts.show',$post->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ URL::route(Config::get('talk::routes.base').'.admin.posts.edit',$post->id) }}" class="btn btn-success">Edit</a>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        {{ $posts->links() }}
        @endunless
    </div>
</div>