<header>
    <h1>
        Categories
        <a href="{{ route(Config::get('talk::routes.base').'.admin.categories.create') }}" class="btn btn-default pull-right">New Category</a>
    </h1>
</header>

<div class="row">
    <div class="pure-u-1">

        @unless($categories)

        <div class="bs-callout bs-callout-danger">
            <h4>No categories!</h4>
        </div>

        @else

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>slug</th>
                    <th>active</th>
                    <th>options</th>
                </tr>
            </thead>

            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->active }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ URL::route(Config::get('talk::routes.base').'.admin.categories.show',$category->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ URL::route(Config::get('talk::routes.base').'.admin.categories.edit',$category->id) }}" class="btn btn-success">Edit</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $categories->links() }}
        @endunless
    </div>
</div>