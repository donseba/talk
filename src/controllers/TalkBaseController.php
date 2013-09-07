<?php

class TalkBaseController extends Controller {

    protected $layout = 'talk::layouts.master';


    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout           = View::make($this->layout);
            $this->layout->header   = View::make( 'talk::layouts.header' );
            $this->layout->content  = '';
        }
    }
}