<?php
/**
 * Created by PhpStorm.
 * User: alber
 * Date: 05/01/2018
 * Time: 12:36
 */

namespace SONFin\Plugins;


use SONFin\ServiceContainerInterface;

interface PluginInterface
{
    public function register(ServiceContainerInterface $container);

}