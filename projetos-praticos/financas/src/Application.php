<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 13/08/2017
 * Time: 11:27
 */
declare(strict_types = 1);
namespace EstevamFin;


use EstevamFin\Plugins\PluginInterface;

class Application
{
    private $serviceContainer;

    /**
     * Application constructor.
     * @param $serviceContainer
     */
    public function __construct(ServiceContainerInterface $serviceContainer)
    {
        $this->serviceContainer = $serviceContainer;
    }

    public function service($name)
    {
        return $this->serviceContainer->get($name);
    }

    public function addService(string $name, $service): void
    {
        if (is_callable($service)) {
            $this->serviceContainer->addLazy($name, $service);
        } else {
            $this->serviceContainer->add($name, $service);
        }
    }

    public function plugin(PluginInterface $plugin): void
    {
        $plugin->register($this->serviceContainer);
    }
}