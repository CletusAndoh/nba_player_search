<?php
//CONTROLLER
include 'header.php';
include 'Db.php';
include 'Player.php';
include 'PlayerView.php';
$name = $_GET['term'];
$view = new PlayerView();

$player = Player::findplayer($name);
$view->player = $player;


$view->render();


?>
