<?php

use App\Core\Http\Request;
use Oladesoftware\Router\Router;

require(dirname(__DIR__) . "/vendor/autoload.php");
require(__DIR__ . "/Core/Helper/debug.php");

$router = new Router();

$request = new Request($_SERVER);
$method = $request->getMethod();
$path =$request->getUrlPath();

$router->addRoute("GET", "/", function (){
    require(__DIR__ . "/Controller/indexController.php");
});

$match = $router->match($path, $method);

if(!$match){
    http_response_code(404);
    echo \App\Core\Http\HtmlResponse::render("404", "template");
}

$router->run($match);