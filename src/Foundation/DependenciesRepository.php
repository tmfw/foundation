<?php
namespace TMFW\Foundation;

use TMFW\Contracts\Foundation\Repository;

class DependenciesRepository implements Repository
{

    protected $app;

    protected $providers = [
        /** TODO: Add dependency service providers */
        'Laracasts\Flash\FlashServiceProvider',
        'Intervention\Image\ImageServiceProvider',
        /*'Zizaco\Entrust\EntrustServiceProvider',*/
        'Spatie\Permission\PermissionServiceProvider',
        'Ixudra\Curl\CurlServiceProvider',
        'Riverskies\Laravel\MobileDetect\MobileDetectServiceProvider',
//        'Barryvdh\TranslationManager\ManagerServiceProvider', //dependency required TMFW/plugin-localizer
    ];

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function load($repo){
        //
    }

    public function register()
    {
        foreach ($this->providers as $provider)
            $this->app->register(new $provider($this->app));

        return $this;
    }

}