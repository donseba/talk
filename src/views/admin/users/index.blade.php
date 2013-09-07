<header>
    <h1>
        Users
        <a href="{{ route(Config::get('talk::routes.base').'.admin.users.create') }}" class="btn btn-default pull-right">New User</a>
    </h1>
</header>

<div class="row">
    @unless($users)

    <div class="bs-callout bs-callout-danger">
        <h4>No Users!</h4>
        <p>That is <code>ODD</code> because you are an user too!.</p>
    </div>

    @else

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>username</th>
                <th>name</th>
                <th>email</th>
                <th>last login</th>
                <th>role</th>
                <th>actions</th>
            </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ HTML::mailto($user->email) }}</td>
                <td>{{ $user->last_login }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ URL::route(Config::get('talk::routes.base').'.admin.users.show',$user->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ URL::route(Config::get('talk::routes.base').'.admin.users.edit',$user->id) }}" class="btn btn-success">Edit</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $users->links() }}
    @endunless
</div>