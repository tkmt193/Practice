<?php
class Array_Obj {
    public $name;
    public $age;
    public $job;

    public function __construct($array) {
        $this->name = $array['name'];
        $this->age = $array['age'];
        $this->job = $array['job'];
    }
}

$array = [
    'name' => 'taro',
    'age' => '20',
    'job' => 'engineer',
];

$obj = new Array_Obj($array);

$value = get_object_vars($obj);

var_dump($array);
var_dump($obj);
var_dump($value);
