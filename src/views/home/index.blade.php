<div class="row">
    <div class="col-lg-9">

        @unless($posts)

        <div class="bs-callout bs-callout-danger">
            <h4>No posts!</h4>
        </div>

        @else


        @foreach( $posts as $key => $post )
        <div class="well {{ ( 0 == $key%2 ? 'even' : 'odd'); }}">
            <h3><a href="{{ URL::to( $talkRoute.'/read/'.$post->slug ) }}">{{ $post->title }}</a></h3>
            <div>Filled under : <i>{{ $post->category->name }}</i> by {{ $post->author->username }}</div>
        </div>

        @endforeach
        
        @endunless

    </div>

    <div class="col-lg-3">
        <div class="panel panel-success">
            <div class="panel-heading">Categories</div>

            @unless($categories)

            <div class="bs-callout bs-callout-danger">
                No categories can be listed at the moment!
            </div>

            @else

            <ul>
            @foreach($categories as $category)
                <li><a href="/{{ $talkRoute }}/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
            @endforeach
            </ul>

            @endunless
        </div>

        <div class="panel panel-warning">
            <div class="panel-heading">Tags</div>

            @unless($tags)

            <div class="bs-callout bs-callout-danger">
                No tags can be listed at the moment!
            </div>

            @else

            <ul>
                @foreach($tags as $tag)
                <li><a href="/{{ $talkRoute }}/tags/{{ $tag->slug }}">{{ $tag->name }}</a></li>
                @endforeach
            </ul>

            @endunless
        </div>
    </div>
</div>