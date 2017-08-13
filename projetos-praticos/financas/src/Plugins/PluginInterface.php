<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 13/08/2017
 * Time: 11:36
 */

namespace EstevamFin\Plugins;


use EstevamFin\ServiceContainerInterface;

interface PluginInterface
{
    public function register(ServiceContainerInterface $container);
}