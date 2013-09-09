<h2>{{ $post->title }}</h2>
<div>Filled under : <i>{{ $post->category->name }}</i> by {{ $post->author->username }}</div>
<hr/>
<div>
    {{ $post->content }}
</div>
<hr/>
<div>
    <h4>Write a comment ?!</h4>
</div>