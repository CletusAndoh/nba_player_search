<?php
class PlayerView {
	public $player;
        private $tpl = 'results.php';
        public function render() {
		$player = $this->player;
                include($this->tpl);
        }
}
