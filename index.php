<html>
	<body>
<h1><center>NBA Player & Team Search</h1>
<center><form action="results.php" method="GET">
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
$players = Player::findAll($term);
//var_dump($players);
$classname = 'Player';
echo $classname::findAll($term);



//$teams = Team::findAll($term);
//var_dump($teams);
//$link = "playersearch.php?term=$results";
                //echo "<a href='$link'>$results $resultsid <br></a>";
                //echo '<br>';
?>
