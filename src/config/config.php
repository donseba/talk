<?php


return array(

    'auth' => array(
        'table' => 'talk_users',
        'model' => 'TalkUser',
        'roles' => array(
            1  => 'user',
            5  => 'editor',
            10 => 'admin'
        )
    ),

    'routes' => array(
        'base' => 'talk',
    ),

    'theme' => array(
        'own'  => false,
        'name' => 'default', // app/views/talk/default/
    )
);