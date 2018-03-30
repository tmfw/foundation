<?php

namespace TMFW\Foundation;

use Illuminate\Contracts\Foundation\Application;

class Register
{

    /**
     * Bootstrap script
     *
     * @param Application $app
     * @return void
     */
    public function bootstrap(Application $app){
        $app->singleton('models', function($app){
            return new ModelsRepository($app);
        });

        /* bind */
        $app->bind('TMFW\Contracts\Report\ModelFiltration', 'TMFW\Foundation\Containers\ModelFiltration');
    }

}