<?php
$expireDate = ['2019-02-25', '2019-02-26', '2019-02-27'];
$newExpireDate = array_map(
    function($date) {
        return (new DateTime($date))->modify('+3 years')->format('Y-m-d');
    }, 
    $expireDate
);

print_r($newExpireDate);