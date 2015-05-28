<html>
<?php
include 'index.php';
include 'Db.php';
include 'Team.php';
try {

        $name = $_GET['term'];
        $con = new Db();
        $dbh =  $con->getPDO();
        $sql = $dbh->prepare("select name from teams where name like '%$name%'");
        $sql->execute(array($name));
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
}

catch(PDOException $e) {
        echo $e->getMessage();
        }

$resultscount =  $sql->rowCount();
foreach($rows as $row) {
               $team = new Team();
                        foreach ($row as $key => $value) {
                                $team->$key = $value;
                                $results = $team->name;


                        }

                $link = "teamsearch.php?term=$results";
                echo "<a href='$link'>$results<br></a>";
                }

?>

<ul>
</ul>

</html>
