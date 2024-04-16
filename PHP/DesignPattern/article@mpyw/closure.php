<?php
$closure = function ($option){
    return "そうだよ({$option})";
};
var_dump($closure);
echo $closure('便乗');


?>