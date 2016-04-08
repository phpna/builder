<?php

/**
 * Created by PhpStorm.
 * User: lichnow
 * Date: 16/4/6
 * Time: 下午12:24
 */
namespace  Phpna\Builder\Providers;
use Illuminate\Support\ServiceProvider;
use Phpna\Builder;
class BuilderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('php.builder',function($app){
            return new Builder();
        });
    }
}
