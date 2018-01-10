<?php
/**
 * Created by PhpStorm.
 * User: alber
 * Date: 05/01/2018
 * Time: 12:53
 */
declare(strict_types=1);
namespace SONFin\Plugins;


use Psr\Container\ContainerInterface;
use SONFin\ServiceContainerInterface;
use SONFin\View\ViewRenderer;
use Twig_Environment;
use Twig_Loader_Filesystem;

class ViewPlugin implements PluginInterface
{
    public function register(ServiceContainerInterface $container)
    {
        $container->addLazy('twig',function(ContainerInterface $container){
            $loader = new Twig_Loader_Filesystem(__DIR__ . '/../../templates');
            $twig = new Twig_Environment($loader);

            $generator = $container->get('routing.generator');
            $twig->addFunction(new \Twig_SimpleFunction('route',
                function (string $name, array $params = []) use ($generator){
                    return $generator->generate($name,$params);

            }));
            return $twig;
        });

        $container->addLazy('view.renderer', function (ContainerInterface $container){
           $twigEnvironment = $container->get('twig');
           return new ViewRenderer($twigEnvironment);
        });

    }


}