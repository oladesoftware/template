<?php

use App\Core\Http\Request;

require(__DIR__ . "/routes/api.php");
require(__DIR__ . "/routes/web.php");

$request = new Request($_SERVER);
$method = $request->getMethod();
$urlPath =$request->getUrlPath();

require(dirname(__DIR__, 2) . "/Controller/indexController.php");