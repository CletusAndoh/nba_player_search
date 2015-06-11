<?php
require_once 'TeamView.php';
require_once 'teamsearch.php';
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
