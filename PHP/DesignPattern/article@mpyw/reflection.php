<?php
class KarateTeam {
    private $members;
    public function __construct() {
        $this->members = func_get_args();
    }
    public function display() {
        echo implode(', ', $this->members);
    }
}

$members = array('YJSNPI', 'MUR', 'KMR');
$reflection = new ReflectionClass('KarateTeam');
$team = $reflection->newInstanceArgs($members);
$team->display(); // YJSNPI, MUR, KMR
?>