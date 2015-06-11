<?php
require_once 'PlayerView.php';
require_once 'playersearch.php';
require_once 'presultsmodel.php';
?>

<html>
	<body>
		<h1>
                <?php echo "Statistics for " .$_GET["term"];?>
                </h1>
		
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
