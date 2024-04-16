<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    2400円を２個購入した場合の金額は
    <?php
    $kingaku1 = price(2400,2);
    echo "{$kingaku1}円"
    ?>
    <br>

    1200円を5個購入した場合の金額は
    <?php
    $kingaku2 = price(1200,5);
    echo "{$kingaku2}円"
    ?>
    <br>

    <?php
    function price($tanka, $kosu) {
        $souryou = 250;
        $ryoukin = $tanka*$kosu;
        if ($ryoukin<5000){
            $ryoukin += $souryou;
        }
        return $ryoukin;
    }
    ?>
</body>
</html>