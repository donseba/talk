<?php

class TalkCategory extends Eloquent{

    protected $fillable = array('name', 'slug', 'active');


    public function post()
    {
        return $this->hasMany('TalkPost');
    }
}