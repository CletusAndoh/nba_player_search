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
	$sql = $dbh->prepare("select name,id from players where name like '%$name%'");
	$sql->execute(array($name));
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
	if ($sql->rowCount() ==  0) {
	header ('Location: teamresults.php?term=' . $_GET['term']);
	}
}

catch(PDOException $e) {
	echo $e->getMessage();
	}

$resultscount =  $sql->rowCount();
foreach($rows as $row) {
               $player = new Player();
                        foreach ($row as $key => $value) {
                                $player->$key = $value;
				$results = $player->name;
				$resultsid = $player->id;

				
                        }

		$link = "playersearch.php?term=$results";
		echo "<a href='$link'>$results $resultsid <br></a>";
                }

?>

<ul>
</ul>

</html>







