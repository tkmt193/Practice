<?php
function recall($num){
    if($num==0){
        return 0;
    }
    return $num + recall($num-1);
}

echo recall(10);

?>