<?php

class TalkCategory extends Eloquent{

    protected $fillable = array('name', 'slug', 'active');


    public function posts()
    {
        return $this->hasMany('TalkPost', 'category_id');
    }
}