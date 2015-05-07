<?php
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

	public function __construct($firstname, $lastname){
		$this->firstname = $firstname;
		$this->lastname = $lastname;

	} 
	
	public function hello(){
	return  $this->firstname . " " . $this->lastname ;

	}

	public function __get($property_name) {
		return $this->$property_name;
	}

	public function __set($property_name, $value) {
		$this->$property_name = $value;
	}
}


