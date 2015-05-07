<html>
<head>
<style type="text/css">
h1, h2{
color:blue;
text-align:center;
}
td{
text-align:center;
}
table {
background:lightgray;
width:100%;
border-style:double;
}
thead{
color:white;
height:"10px";
}


</style>
</head>

<body>
<h1>Example Page</h1>

<h1>Players Name</h1>
<h2>
<?php
include 'Player.php';
$newPlayer = new Player("Cletus", "Andoh");
$newPlayer->age = 17;
echo $newPlayer->age;
echo "Statistics for " . $newPlayer ->hello();
?>
</h2>
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
<td>SF</td>
<td>30</td>
<td>CLE</td>
<td>69</td>
<td>2493</td>
<td>2.4</td>
<td>16.6</td>
<td>9.6</td>
<td>38.6</td>
<td>2.3</td>
<td>1.6</td>
<td>15.3</td>
</tr>

</table>
</center>
</div>
<?php
include 'Player.php';
$newPlayer = new Player("Cletus", "Andoh");
echo $newPlayer ->hello();

?>

</body>
</html>
