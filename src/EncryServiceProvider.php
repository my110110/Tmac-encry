<?php

namespace Tmac\Encrypackages;

use Illuminate\Support\ServiceProvider;

class EncryServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    
        $this->app->singleton('EncryPackage', function ($app) {
        
            return new EncryPackage();
        
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/encry.php' => config_path('encry.php'), // 发布配置文件到 laravel 的config 下
    
        ]);
    }
    
    /**
     
     * Get the services provided by the provider.
     
     *
     
     * @return array
     
     */
    
    public function provides()
    {
        return ['EncryPackage'];
        
    }
    
}
