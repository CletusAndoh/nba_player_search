<html>
	<body>
<h1><center>NBA Player & Team Search</h1>
<center><form action="" method="GET">
<b>Enter Search Term:</b>
<input type="text" name="term">
<input type="submit" value="Submit" name='both'> 
</form></center>
	</body>
</html>


<?php
//require_once 'nbaview.php';
require_once 'Player.php'; 
require_once 'Team.php';
$term = $_GET['term'];
$players = Player::findAll();
echo "Players found" . "<br>";

foreach ($players as $player) {
	$playerlink = "playersearch.php?term=$player->name";	
	echo "<a href = '$playerlink'>$player->name \n </a>";
	echo "<br>";
	}


$teams = Team::findAll($term);
echo "<br>";
echo "Teams found" . "<br>";

foreach ($teams as $team) {
	$teamlink = "teamsearch.php?term=$team->name";
        echo "<a href = '$teamlink'>$team->name \n </a>";
        echo "<br>";
}
?>
