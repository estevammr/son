<?php

use EstevamFin\Application;
use EstevamFin\Plugins\RoutePlugin;
use EstevamFin\Plugins\ViewPlugin;
use EstevamFin\ServiceContainer;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;

require_once __DIR__ . '/../vendor/autoload.php';

$serviceContainer = new ServiceContainer();
$app = new Application($serviceContainer);

$app->plugin(new RoutePlugin());
$app->plugin(new ViewPlugin());

//$app->get('/{name}', function(ServerRequestInterface $request) use($app){
//    $view = $app->service('view.renderer');
//    return $view->render('teste.html.twig', ['name' => $request->getAttribute('name')]);
//});

$app->get('/category-costs', function() use($app){
    $view = $app->service('view.renderer');
    return $view->render('category-costs/list.html.twig');
});

$app->get('/home/{name}/{id}', function(ServerRequestInterface $request){
    $response = new Response();
    $response->getBody()->write("response com emmiter do diactoros");
    return $response;
});

$app->start();