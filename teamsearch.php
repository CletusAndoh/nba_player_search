<html>
<?php
include 'header.php';
include 'Db.php';
include 'Team.php';
?>
	<body>
		<h1>
			<?php
			echo "Statistics for " .$_GET['term'];
			?></h1>
	<?php
                try {
			$con = new Db();
			$dbh = $con->getPDO();
			$name = $_GET['term'];
			$stmt = $dbh->prepare("select * from teams inner join teams_stats on teams.id = teams_stats.id where name=?");
			$stmt->execute(array($name));
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
                    }
		 catch(PDOException $e) {
                    	echo $e->getMessage();
                    }
		foreach($rows as $row){
			$team = new Team();
			foreach ($row as $key => $value) {
				$team->$key = $value;

			}
		}
		
                ?>
<div>
<center>
<table name="table" border=1px>
                        <thead>
                                <tr>
                                        <th>Season</th>
                                        <th>Name</th>
                                        <th>Start Year</th>
                                        <th>Current Year</th>
					<th>Years in NBA</th>
                                        <th>Games</th>
                                        <th>Wins</th>
                                        <th>Losses</th>
                                        <th>Win-Lose Ration</th>
                                        <th>Years in Playoffs</th>
                                        <th>Years First in Division</th>
                                        <th>Years Conference Won</th>
                                        <th>Years Championship Won</th>
                                </tr>
                        </thead>
                                <tr>
                                        <td>2014-2015</td>
                                        <td>
                                                <?php
                                                print($team->name);
                                                ?>

                                        </td>
                                        <td>
                                                <?php
                                                print($team->startyear);
                                                ?>
                                        </td>
                                        <td>
                                                <?php
                                                print($team->currentyear);
                                                ?>
                                        </td>
                                        <td>
                                                <?php
                                                print($team->years);
                                                ?>
                                        </td>
                                        <td>
                                                <?php
                                                print($team->games);
                                                ?>
                                        </td>
                                        <td>
                                                <?php
                                                print($team->wins);
                                                ?>
                                        </td>
                                        <td>
                                                <?php
                                                print($team->losses);
                                                ?>
                                        </td>
					<td>
                                                <?php
                                                print($team->winloseratio);
                                                ?>
                                        </td>
                                        <td>
                                                <?php
                                                print($team->yearsinplayoffs);
                                                ?>
                                        </td>
                                        <td>
                                                <?php
                                                print($team->yearsfirstindivision);
                                                ?>
                                        </td>
                                        <td>
                                                <?php
                                                print($team->yearsconferencewon);
                                                ?>
                                        </td>
                                        <td>
                                                <?php
                                                print($team->yearschampionshipwon);
                                                ?>
                                        </td>
                                </tr>
        </table>	
</center>
</div>
	</body>



</html>
