<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $tax =0.08;
    function taxPrice($tanka, $kosu){
        global $tax;
        $ryokin = $tanka * $kosu * (1+$tax);
        echo "{$ryokin}円です。";
    }
    taxPrice(250,4);
    echo "税込み".$tax*100,"%";
    ?>
</body>
</html>