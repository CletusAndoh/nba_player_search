<?php
//CONTROLLER
include 'header.php';
include 'Db.php';
include 'Team.php';
include 'TeamView.php';
$name = $_GET['term'];
$view = new TeamView();

$team = Team::findplayer($name);
$view->team = $team;

$view->render();


?>
