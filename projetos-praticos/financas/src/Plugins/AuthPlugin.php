<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 03/09/2017
 * Time: 13:04
 */
declare(strict_types=1);
namespace EstevamFin\Plugins;

use Interop\Container\ContainerInterface;
use EstevamFin\Auth\Auth;
use EstevamFin\Auth\JasnyAuth;
use EstevamFin\ServiceContainerInterface;

class AuthPlugin implements PluginInterface
{

    public function register(ServiceContainerInterface $container)
    {
        $container->addLazy('jasny.auth', function (ContainerInterface $container){
            return new JasnyAuth($container->get('user.repository'));
        });
        $container->addLazy('auth', function (ContainerInterface $container) {
            return new Auth($container->get('jasny.auth'));
        });
    }
}