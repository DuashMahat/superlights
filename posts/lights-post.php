<?php
/**
 * Created by PhpStorm.
 * User: abdull53
 * Date: 2019-04-24
 * Time: 20:25
 */
require __DIR__ . "/../vendor/autoload.php";
require '../lib/lights.inc.php';

$controller = new Lights\LightsController($game, $_POST);

//change this when uploading to cse server
//header("location:../". $controller->getRedirect());
header("location:". $controller->getRedirect());

exit;