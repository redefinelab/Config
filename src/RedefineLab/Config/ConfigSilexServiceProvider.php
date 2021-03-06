<?php

namespace RedefineLab\Config;

class ConfigSilexServiceProvider implements \Silex\ServiceProviderInterface
{

    public function boot(\Silex\Application $app)
    {
        // Nothing to do here
    }

    public function register(\Silex\Application $app)
    {
        $app['config'] = $app->share(function () use ($app) {
            return new Config();
        });
    }

}