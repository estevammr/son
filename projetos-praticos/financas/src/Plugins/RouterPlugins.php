<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 13/08/2017
 * Time: 12:17
 */

namespace EstevamFin\Plugins;


use Aura\Router\RouterContainer;
use EstevamFin\ServiceContainerInterface;

class RouterPlugins implements PluginInterface
{
    public function register(ServiceContainerInterface $container)
    {
        $routerContainer = new RouterContainer();
        /* Registrar as rotas da aplicação */
        $map = $routerContainer->getMap();
        /* Tem a função de identificar a rota que está sendo acessada */
        $matcher = $routerContainer->getMatcher();
        /* Tem a função de gerar links com base nas rotas registradas*/
        $generator = $routerContainer->getGenerator();

        $container->add('routing', $map);
        $container->add('routing.matcher', $matcher);
        $container->add('routing.generator', $generator);
    }
}