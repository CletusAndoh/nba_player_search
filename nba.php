<html>
        <body>
<h1><center>NBA Player & Team Search</h1>
<center><form action="" method="GET">
<b>Enter Search Term:</b>
<input type="text" name="term">
<input type="submit" value="Submit" name='both'>
</form>
</center>

<?php if($players) {
	echo "<h2>Players</h2>";
	foreach ($players as $player) {
		$playerlink = "playersearch.php?term=$player->name";	
		echo "<a href = '$playerlink'>$player->name \n </a>";
		echo "<br>";
	}
}
 if($teams) {
	echo "<h2>Teams</h2>";
	foreach ($teams as $team) {
		$teamlink = "teamsearch.php?term=$team->name";	
		echo "<a href = '$teamlink'>$team->name \n </a>";
		echo "<br>";
	}
}
 ?>

        </body>
</html>
