<h2>Posts by Tag : {{ $tag->name }}</h2>

<div>
    @unless($posts)

    <div class="bs-callout bs-callout-danger">
        <h4>No posts!</h4>
    </div>

    @else

    <div class="list-group">
        @foreach( $posts as $key => $post )
        <div class="list-group-item">
            <h4 class="list-group-item-heading"><a href="{{ URL::to( $talkRoute.'/read/'.$post->slug ) }}"/>{{ $post->title }}</a></h4>
            <p class="list-group-item-text">
                Filed under : <em><a href="{{ URL::to( $talkRoute.'/categories/'.$post->category->slug ) }}"/>{{ $post->category->name }}</a></em>
                by <a href="{{ URL::to( $talkRoute.'/users/'.$post->author->id ) }}"/>{{ $post->author->username }}<a/>
            </p>
        </div>
        @endforeach
    </div>

    {{ $posts->links() }}
    @endunless

</div>