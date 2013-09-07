<?php

// Routes accessible to anyone
Route::controller( '/auth',       'TalkAuthController'  );
Route::controller( '/list',       'TalkListController'  );
Route::controller( '/read',       'TalkReadController'  );
Route::controller( '/tags',       'TalkTagsController'  );
Route::controller( '/categories', 'TalkCategoriesController'  );
Route::controller( '/users',      'TalkUsersController' );


// Routes accessible to users and up
Route::group(array('before'=>'talkAuth'), function(){

    // Write an new Article, OR edit an existing one.
    // Editors can edit posts of other users, OR delete them.
    Route::controller('/write', 'TalkWriteController');

    // Own profile editing
    Route::controller('/profile', 'TalkProfileController');

    // Admin and up
    Route::group( array( 'prefix' => 'admin', 'before' => 'talkAdmin' ), function(){

        // manage Users
        Route::resource('users', 'TalkAdminUsersController');

        // manage Posts
        Route::resource('posts', 'TalkAdminPostsController');

        // manage Tags
        Route::resource('tags', 'TalkAdminTagsController');

        // manage Categories
        Route::resource('categories', 'TalkAdminCategoriesController');
    });
});

Route::controller('/', 'TalkHomeController');