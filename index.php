<?php

require_once 'Player.php'; 
require_once 'Team.php';
require_once 'nbaview.php';

$term = $_GET['term'];

$view = new NBAView();

if($term) {
	$players = Player::findAll();

	$teams = Team::findAll($term);

	$view->teams = $teams;
	$view->players = $players;
}

$view->render();
?>
