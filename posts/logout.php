<?php
/**
 * Created by PhpStorm.
 * User: abdull53
 * Date: 2019-04-25
 * Time: 03:04
 */
require '../lib/lights.inc.php';
if(isset($_SESSION[GAME_SESSION]))
{
    unset($_SESSION[GAME_SESSION]);
}
//do this after uploading to web server
$root = $game->getRoot();
//$root = "../index.php";
header("location:$root");
exit;