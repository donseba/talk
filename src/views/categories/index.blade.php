@unless($categories)

<div class="bs-callout bs-callout-danger">
    <h4>No categories can be listed at the moment!</h4>
</div>

@else

    @foreach($categories as $category)
        <div><a href="/{{ $talkRoute }}/categories/{{ $category->slug }}">{{ $category->name }}</div>
    @endforeach

@endunless