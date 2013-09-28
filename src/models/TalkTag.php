<?php

class TalkTag extends Eloquent{

    protected $fillable = array('name', 'slug', 'active');


    public function posts()
    {
//        return $this->hasMany('TalkPost', 'tag_id');
        return $this->belongsToMany('TalkPost', 'talk_post_tags', 'tag_id', 'post_id');
    }
}