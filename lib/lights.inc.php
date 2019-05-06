<?php
/**
 * Created by PhpStorm.
 * User: abdull53
 * Date: 2019-04-24
 * Time: 21:02
 */

require __DIR__ . "/../vendor/autoload.php";
use Lights\Game;

// Start the PHP session system
session_start();

define("GAME_SESSION", 'game');

//if(!isset($_SESSION[GAME_SESSION]) && $_SERVER['SCRIPT_NAME'] !== '/~abdull53/superlights/index.php'){
//    //change this to /~abdull53/superlights/index.php
//    header('location:/index.php');
//    exit;
//}


// If there is a Guessing session, use that. Otherwise, create one
if(!isset($_SESSION[GAME_SESSION])) {
    $_SESSION[GAME_SESSION] = new Lights\Game();
}

$game = $_SESSION[GAME_SESSION];