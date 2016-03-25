<?php
namespace Styde\Container;

abstract class Provider
{
    /**
     * @var Container
     */
    protected $container;


    /**
     * Provider constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    abstract public function register();
}