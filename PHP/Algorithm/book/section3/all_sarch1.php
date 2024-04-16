<?php
$a=[2,4,5,8,9];
$v=5;
$N=count($a);
print_r ($a);
echo $N;
$exsit=false;
$found_id=-1;

for ($i=0;$i<$N;$i++){
    if($a[$i]==$v){
        $exsit=true;
        $found_id=$i;
        break;   
    }
}

if($exsit==true){
    echo "Yes",$i,"番目";
} else {
    echo "No";
}
?>