<?php
/**
 * Created by PhpStorm.
 * User: estev_000
 * Date: 17/10/2016
 * Time: 15:33
 */

namespace App\Controllers;

use duckbill\Controller\Action;
use duckbill\DI\Container;

class IndexController extends Action
{

    public function index()
    {
        $client = Container::getModel("Client");
        $this->views->clients = $client->fetchAll();
        $this->render("index");
    }

    public function contact()
    {
        $client = Container::getModel("Client");
        $this->views->clients = $client->find(2);
        $this->render("contact");
    }

}