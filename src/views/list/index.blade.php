<div>
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


{{ $posts->links() }}
@endunless

</div>