<?php
class Staff {
    public static $piggyBank = 0;
    public static function deposit(int $yen){
        self::$piggyBank +=$yen;
    }
    public $name;
    public $age;
    function  __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }


    public function hello(){
        if (is_null($this->name)) {
            echo "こんにちは！","\n";
        } else {
            echo "こんにちは、{$this->name}です！","\n";
        }
    } 
    public function latePenalty(){
        self::deposit(1000);
    }
}
// ?>
