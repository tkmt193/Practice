<?php
$expireDate = ['2019-02-22', '2019-02-26', '2019-02-27'];

array_walk(
    $expireDate,
    function(&$date) {
        $date = (new DateTime($date))->modify('+3 years')->format('Y-m-d');
    }
);
print_r($expireDate);