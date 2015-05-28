<html>
<?php
include 'header.php';
include 'Db.php';
include 'Player.php';
?>

	<body>
		<h1>
		<?php echo "Statistics for " .$_GET["term"];?>
		</h1>



		<?php
		try {
		$con = new Db();
		$dbh = $con->getPDO2();

		$name = $_GET['term'];
		$stmt = $dbh->prepare("select * from players inner join players_stats on players.id = players_stats.id where name=?");
		$stmt->execute(array($name));
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		if ($stmt->rowCount() > 0) {
        		echo $stmt->rowCount() . " Row found. Player Found";
    		}
		else {
		header('Location: teamsearch.php?term=' . $_GET['term']);
    		}

		    }
		catch(PDOException $e) {
		    echo $e->getMessage();
		    }

		foreach($rows as $row) {
                        $player = new Player();
                        foreach ($row as $key => $value) {
                               	$player->$key = $value;

                        }
                }


		?>


		<div>
		<center>
		<table name="table" border=1px>
			<thead>
				<tr>
					<th>Season</th>
					<th>Position</th>
					<th>Age</th>
					<th>Team</th>
					<th>Games</th>
					<th>Minutes</th>
					<th>ORB%</th>
					<th>DRB%</th>
					<th>TRB%</th>
					<th>AST%</th>
					<th>STL%</th>
					<th>BLK%</th>
					<th>TOV%</th>
				</tr>
			</thead>
				<tr>
					<td>2014-2015</td>
					<td>
						<?php
						print($player->position);
						?>

					</td>
					<td>
						<?php
						print($player->age);
						?>
					</td>
					<td>
						<?php
						print($player->team);
						?>
					</td>
					<td>
						<?php
						print($player->games);
						?>
					</td>
					<td>
						<?php	
						print($player->minutes);
						?>
					</td>
					<td>
						<?php
						print($player->offensive_rbpct);
						?>
					</td>
					<td>
						<?php
						print($player->defensive_rbpct);
						?>
					</td>
					<td>
						<?php
						print($player->total_rbpct);
						?>
					</td>
					<td>
						<?php
						print($player->assistpct);
						?>
					</td>
					<td>
						<?php
						print($player->stealpct);
						?>
					</td>
					<td>
						<?php
						print($player->blockpct);
						?>
					</td>
					<td>
						<?php
						print($player->turnoverpct);
						?>
					</td>
				</tr>

	</center>
	</div>

	</body>
</html>

