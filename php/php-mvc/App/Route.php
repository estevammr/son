<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 17/10/2016
 * Time: 15:05
 */

namespace App;


use duckbill\Init\Bootstrap;

class Route extends Bootstrap
{

    protected function initRoutes()
    {
        $routes['home'] = array('route'=>'/','controller'=>'indexController','action'=>'index');
        $routes['contact'] = array('route'=>'/contact','controller'=>'indexController','action'=>'contact');
        $this->setRoutes($routes);
    }
}