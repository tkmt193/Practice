<?php
$var = 'GLOBAL';
$a = function () {
    $var = 'A';
    $b = function () use ($var) {
        return $var;
    };
    return $b();
};
echo $a(); // A
?>