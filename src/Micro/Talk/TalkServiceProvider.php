<?php namespace Micro\Talk;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;


class TalkServiceProvider extends ServiceProvider {


    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // register the package
        $this->package('micro/talk');

        $this->viewShares();

        $this->filters();

        $this->routes();
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['talk'] = $this->app->share(function($app)
        {
            return new Talk;
        });
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('talk');
    }


    /**
     * Shared views parameter.
     *
     * @return void
     */
    public function viewShares()
    {
        View::share('talkTitle', 'Time To Micro Talk!' );
        View::share('talkRoute', Config::get('talk::routes.base') );
    }


    /**
     * Provide the needed filters.
     *
     * @return void
     */
    public function filters()
    {
        // authentication filter used by the system
        Route::filter('talkAuth', function()
        {
            if (Auth::guest() || get_class(Auth::user()) != Config::get('talk::auth.model'))
            {
                // redirect to login page
                return Redirect::guest( Config::get('talk::routes.base').'/auth/login');
            }
        });


        // Make sure administrative accounts are admin only!
        Route::filter('talkAdmin', function()
        {
            if ( Auth::guest() || Auth::user()->role != 10 )
            {
                return 'Admin Only'; // NO access to administration.
            }
        });
    }


    /**
     * Routing wrapper and include routes file.
     *
     * @return void
     */
    public function routes()
    {
        Route::group(array( 'prefix'=> Config::get('talk::routes.base') ),function(){
            Config::set('auth.model', Config::get('talk::auth.model'));
            Config::set('auth.table', Config::get('talk::auth.table'));

            include __DIR__.'/../../routes.php';
        });
    }
}