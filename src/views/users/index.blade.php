@unless($users)

<div class="bs-callout bs-callout-danger">
    <h4>No users can be listed at the moment!</h4>
</div>

@else

@foreach($users as $user)
<div><a href="/{{ $talkRoute }}/users/show/{{ $user->id }}">{{ $user->username }}</div>
@endforeach

@endunless