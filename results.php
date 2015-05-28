<html>
<?php
include 'index.php';
include 'Db.php';
include 'Player.php';
include 'Team.php';
try {

        $name = $_GET['term'];
        $con = new Db();
        $dbh =  $con->getPDO2();
	$dbh2 = $con->getPDO();	

        $sql = $dbh->prepare("select name,id from players where name like '%$name%'");
        $sql->execute(array($name));
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);

	$sql2 = $dbh2->prepare("select name from teams where name like '%$name%'");
        $sql2->execute(array($name));
        $rows2 = $sql2->fetchAll(PDO::FETCH_ASSOC);
}

catch(PDOException $e) {
        echo $e->getMessage();
        }
echo "<h1>Click a player or team to get more info!</h1> <br>";
echo "Players Found" . '<br>';
foreach($rows as $row) {
               $player = new Player();
                        foreach ($row as $key => $value) {
                                $player->$key = $value;
                                $results = $player->name;
                                $resultsid = $player->id;
                        }

                $link = "playersearch.php?term=$results";
                echo "<a href='$link'>$results $resultsid <br></a>";
		echo '<br>';
                }

echo '<br>' .  "Teams Found" . '<br>';
foreach($rows2 as $row2) {
               $team = new Team();
                        foreach ($row2 as $key2 => $value2) {
                                $team->$key2 = $value2;
                                $results2 = $team->name;


                        }

                $link2 = "teamsearch.php?term=$results2";
                echo "<a href='$link2'>$results2<br></a>";
		echo '<br>';
                }


?>

<ul>
</ul>

</html>
