<?php
require_once 'Db.php';
class Player {
	protected $firstname;
	protected $lastname;
	protected $age;
	protected $team;
	protected $games;
	protected $minutes;
	protected $ORB_pct;//Offensive Rebound
	protected $DRB_pct;//Defensive
	protected $TRB_pct;//Total Rebound
	protected $AST_pct;//Assist
	protected $STL_pct;//Steals
	protected $BLK_pct;//Blocks
	protected $TOV_pct;//Turnovers

	public function __construct($firstname, $lastname, $age, $team, $minutes ,$ORB_pct, $DRB_pct, $TRB_pct, $AST_pct, $STL_pct, $BLK_pct, $TOV_pct){
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->age = $age;
		$this->team = $team;
		$this->games = $games;
		$this->minutes = $minutes;
		$this->ORB_pct = $ORB_pct;
		$this->DRB_pct = $DRB_pct;
		$this->TRB_pct = $TRB_pct;
		$this->AST_pct = $AST_pct;
		$this->STL_pct = $STL_pct;
		$this->BLK_pct = $BLK_pct;
		$this->TOV_pct = $TOV_pct;
		

	} 
	

	public function __set($key, $value) {
                $this->$key = $value;
        }

        public function __get($key) {
                return $this->$key;
        }

	public static function findAll() {
	$con = new Db();
	$dbh =  $con->getPDO2();
	$term = $_GET['term'];
	$sql = $dbh->prepare("select name,id from players where name like '%$term%'");
        $sql->execute(array($term));
        $rows = $sql->fetchAll(PDO::FETCH_ASSOC);	
	$playerarr = array();
	foreach($rows as $row) {
               $player = new Player();
		foreach ($row as $key => $value) {
			$player->$key = $value;
		}
		$playerarr[] = $player;
                }

		return $playerarr;
	}
}


