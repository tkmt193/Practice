<?php
$a=[2,8,5,1,9];
$b=[3,2,1,4,5];
$v=5;
$N_a=count($a);
$N_b=count($b);

$min_value=INF;
$min_a=-1;
$min_b=-1;

for ($i=0;$i<$N_a;$i++){
    for ($j=0;$j<$N_b;$j++){
        if(($a[$i]+$b[$j])<$min_value){
            $min_value=$a[$i]+$b[$j];  
            $min_a=$a[$i];
            $min_b=$b[$j];
        }
    } 
}


echo "A:{$min_a}B:{$min_b}の時、最小値：",$min_value;

?>