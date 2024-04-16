<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    function oneUp(&$var){
        $var +=1;
    }
    $num = 5;
    oneUp($num);
    echo $num;
    ?>
</body>
</html>