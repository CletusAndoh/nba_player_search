<?php
class TeamView {
        public $team;
        private $tpl = 'teamresults.php';
        public function render() {
                $team = $this->team;
                include($this->tpl);
        }
}
