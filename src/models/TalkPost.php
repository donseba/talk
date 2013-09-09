<?php

class TalkPost extends Eloquent{


    public function category()
    {
        return $this->belongsTo('TalkCategory', 'category_id' );
    }

    public function author()
    {
        return $this->belongsTo('TalkUser', 'user_id');
    }
}