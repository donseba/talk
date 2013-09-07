@unless($tags)

<div class="bs-callout bs-callout-danger">
    <h4>No tags can be listed at the moment!</h4>
</div>

@else

    @foreach($tags as $tag)
    <div><a href="/{{ $talkRoute }}/tags/{{ $tag->slug }}">{{ $tag->name }}</div>
    @endforeach

@endunless