<?php

namespace SM\Gittigidiyor;

use Illuminate\Support\ServiceProvider;

class GittigidiyorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('gittigidiyor', function(){
          return new Gittigidiyor(config('app.gittigidiyor'));
        });
    }
}
