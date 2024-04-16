<?php
$chars = ['a', 'b', 'c'];
echo count($chars) . PHP_EOL;

$chars = [
    'a' => 'apple',
    'b' => 'banana',
    'c' => 'cherry'
];
echo count($chars) . PHP_EOL;

$chars = [
    'name' => 'apple',
    'age' => 'banana',
    'prooaty' => 'cherry',
    'hobby' => ['darts', 'soccer', 'golf']
];
echo count($chars) . PHP_EOL;
echo count($chars, COUNT_RECURSIVE) . PHP_EOL;