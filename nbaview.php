<?php
class NBAView {
	public $players = [];
	public $teams = [];

	private $tpl = 'nba.php';
	public function render() {
		$players = $this->players;
		$teams = $this->teams;

		include($this->tpl);
	}
}
