<?php
$fib = function ($n) use (&$fib) {
    switch ($n) {
        case 1:  return 0;
        case 2:  return 1;
        default: return $fib($n - 2) + $fib($n - 1);
    }
};
echo $fib(20); // 4181
?>