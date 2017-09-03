<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 13/08/2017
 * Time: 12:17
 */
declare(strict_types=1);
namespace EstevamFin\Plugins;

use Interop\Container\ContainerInterface;
use EstevamFin\ServiceContainerInterface;
use EstevamFin\View\ViewRenderer;

class ViewPlugin implements PluginInterface
{
    public function register(ServiceContainerInterface $container)
    {
        $container->addLazy('twig', function (ContainerInterface $container) {
            $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../templates');
            $twig = new \Twig_Environment($loader);
            return $twig;
        });

        $container->addLazy('view.renderer', function (ContainerInterface $container) {
            $twigEnviroment = $container->get('twig');
            return new ViewRenderer($twigEnviroment);
        });
    }
}