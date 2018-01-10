<?php
/**
 * Created by PhpStorm.
 * User: alber
 * Date: 05/01/2018
 * Time: 12:08
 */

namespace SONFin;




use Xtreamwayz\Pimple\Container;

class ServiceContainer implements ServiceContainerInterface
{
    private $container;

    public function __construct()
    {
        $this->container = new Container();
    }
    public function add(string $name, $service)
    {
        $this->container[$name] = $service;
    }

    public function addLazy(string $name, callable $callable)
    {
        $this->container[$name] = $this->container->factory($callable);
    }

    public function get(string $name)
    {
        return $this->container->offsetGet($name);
    }

    public function has(string $name)
    {
        return $this->container->has($name);
    }

}