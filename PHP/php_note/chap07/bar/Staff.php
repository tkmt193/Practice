<?php
class Staff {
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
}
// ?>
