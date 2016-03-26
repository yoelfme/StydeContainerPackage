<?php
namespace Styde\Container;

class Application
{
    /**
     * @var Container
     */
    protected $container;


    /**
     * Application constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function registerProviders($providers = [])
    {
        foreach ($providers as $provider) {
            $provider = new $provider($this->container);
            $provider->register();
        }
    }
}