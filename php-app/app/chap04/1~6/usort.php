<?php
$users = [
    ['name' => '田中太郎', 'age' => 20],
    ['name' => '山田花子', 'age' => 25],
    ['name' => '佐藤次郎', 'age' => 30]
];

usort($users, function($a, $b) {
    if ($a['age'] === $b['age']) {
        return $a['name'] <=> $b['name'];
    }
    return ($a['age'] <=> $b['age'])* 1;
});

print_r($users);