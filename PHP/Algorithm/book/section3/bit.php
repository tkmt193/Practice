<?php
$a=[3,4,6];
$N=count($a);

//部分和を求めるプログラム
$sum=0;
$W=10;
for ($bit=0;$bit <(1 << $N);$bit++){
    for ($i=0;$i<$N;$i++){
        if($bit & (1 << $i)){
            $sum+=$a[$i];
        }
    }
    if ($sum=$W){
        echo "Yes";
        break;
    }
}
?>