<div class="row">
    <div class="col-lg-9">
        @include('talk::home.posts', array('posts', $posts) )
    </div>

    <div class="col-lg-3">
        @include('talk::home.categories', array('categories', $categories) )

        @include('talk::home.tags', array('tags', $tags) )



    </div>
</div>