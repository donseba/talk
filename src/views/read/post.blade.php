<h2>{{ $post->title }}</h2>
<div>Filled under : <i>{{ $post->category->name }}</i> by {{ $post->author->username }}</div>
<hr/>
<div>
    {{ $post->content }}
</div>
<hr/>

<div>
    <a class="btn btn-success" href="{{ URL::to( $talkRoute.'/write/reply/'.$post->id ) }}">Write Comment</a>
    <br/><br/>

    @unless($comments)

    <div class="bs-callout bs-callout-danger">
        <h4>No comments, be the first!</h4>
    </div>

    @else

    <div class="list-group">
        @foreach( $comments as $key => $comment )
        <div class="list-group-item">
            <h4 class="list-group-item-heading">by <a href="{{ URL::to( $talkRoute.'/users/'.$comment->author->id ) }}">{{ $post->author->username }}</a></h4>
            <p class="list-group-item-text">
                {{ $comment->content }}
            </p>
        </div>
        @endforeach
    </div>

    @endunless
    <a class="btn btn-success" href="">Write Comment</a>

</div>