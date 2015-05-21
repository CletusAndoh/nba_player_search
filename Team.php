<?php
class Team {
        protected $name;
        protected $startyear;
        protected $currentyear;
        protected $yearsinNBA;
        protected $games;
        protected $wins;
        protected $losses;
        protected $winloseratio;
        protected $yearsinplayoffs;
        protected $yearsfirstindivision;
        protected $yearsconferencewon;
        protected $yearschampionshipwon;

        public function __construct($name, $startyear, $currentyear, $yearsinNBA, $games, $wins, $losses, $winloseratio, $yearsinplayoffs, $yearsfirstindivision, $yearsconferencewon, $yearschampionshipwon){
                $this->name = $name;
                $this->startyear = $startyear;
                $this->currentyear = $currentyear;
                $this->yearsinNBA = $yearsinNBA;
                $this->games = $games;
                $this->wins = $wins;
                $this->losses = $losses;
                $this->winloseratio = $winloseratio;
                $this->yearsinplayoffs = $yearsinplayoffs;
                $this->yearsindivision = $yearsindivision;
                $this->yearsconferencewon = $yearsconferencewon;
                $this->yearschampionshipwon = $yearschampionshipwon;

        }

	public function __set($key, $value) {
		$this->$key = $value;
	}

	public function __get($key) {
		return $this->$key;
	}
}



