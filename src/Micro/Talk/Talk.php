<?php namespace Micro\Talk;

class Talk {

    public static function renderErrors( $errors = null )
    {
        if( null != $errors )
        {
            $html = implode('', $errors->all('<li> :message</li>'));
            $html = sprintf('<ul class="errors">%s</ul>',$html);
            return $html;
        }

        return '';
    }
}