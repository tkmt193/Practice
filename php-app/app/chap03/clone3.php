<?php declare(strict_types=1); ?>
<?php
class Task{
    public $name;
}
$task1 = new Task();
$task1->name = 'パスポートの更新';
$task2 = $task1;
$task3 = clone $task1;
var_dump($task1 == $task2); //true
var_dump($task1 === $task2); //true
var_dump($task1 == $task3); //true
var_dump($task1 === $task3); //false
