<?php

require __DIR__ . "/../vendor/autoload.php";
require '../lib/lights.inc.php';

$controller = new Lights\IndexController($game, $_POST);

//change this when uploading to cse server
//header("location:../". $controller->getRedirect());
header("location:".$controller->getRedirect());

exit;