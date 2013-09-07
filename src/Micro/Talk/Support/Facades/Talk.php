<?php namespace Micro\Talk\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Talk extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'talk'; }

}