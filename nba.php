<html>
<head>
<link rel="stylesheet" type="text/css" href="base.css">
</head>
        <body>
<a href='index.php'><h1><center>NBA Player & Team Search</h1></a>
<center><form action="" method="GET">
<b>Enter Search Term:</b>
<input type="text" name="term">
<input type="submit" value="GO!" name='both'>
</form>
</center>
<div class="results">
	<div>
		<?php if($players) {
			echo "<h2>Players</h2>";
			foreach ($players as $player) {
				$playerlink = "playersearch.php?term=$player->name";	
				echo "<a href = '$playerlink'>$player->name \n </a>";
				echo "<br>";
			}
		}
		?>
	</div>
	<div>
		<?php if($teams) {

			echo "<h2>Teams</h2>";
			foreach ($teams as $team) {
				$teamlink = "teamsearch.php?term=$team->name";	
				echo "<a href = '$teamlink'>$team->name \n </a>";
				echo "<br>";
			}
		}
	 ?>
	</div>
</div>
</body>
</html>
