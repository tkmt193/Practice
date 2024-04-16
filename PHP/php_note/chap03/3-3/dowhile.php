<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    do {
        $a = mt_rand(1,13);
        $b = mt_rand(1,13);
        $c = mt_rand(1,13);
        $abc = $a + $b + $c;
        if($abc == 21) {
            break;
        }
    } while (TRUE); 
    echo "合計が21になる三つの数字{$a}、{$b}、{$c}";
    ?>
</body>
</html>