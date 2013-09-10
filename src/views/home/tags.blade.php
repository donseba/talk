<div class="panel panel-warning">
    <div class="panel-heading">Tags</div>

    @unless($tags)

    <div class="bs-callout bs-callout-danger">
        No tags can be listed at the moment!
    </div>

    @else

    <ul class="list">
        @foreach($tags as $tag)
        <li><a href="/{{ $talkRoute }}/tags/{{ $tag->slug }}">{{ $tag->name }}</a></li>
        @endforeach
    </ul>

    @endunless
</div>