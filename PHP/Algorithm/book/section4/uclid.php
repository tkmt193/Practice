<?php

//最大公約数を求める
function GCD($m,$n){
    if($n==0){
        return $m;
    }
    return GCD($n,$m%$n);
}

echo GCD(722,171);

?>