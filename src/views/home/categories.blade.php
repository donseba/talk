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