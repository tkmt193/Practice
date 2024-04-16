<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $numArray = array();
    while (count($numArray) < 5){
        $num = mt_rand(1,30);
        if(! in_array($num, $numArray)){
            array_push($numArray, $num);
        }

    }
    print_r($numArray);
    ?>

</body>