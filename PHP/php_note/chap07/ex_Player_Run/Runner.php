<?php
require_once("Player.php");
class Runner extends Player{
    public $age;
    function __construct($name,$age){
        parent::__construct($name);
        $this->age = $age;
    }
    public function play(){
        echo "{$this->name}が走る！","\n";
    }
}
// ?>