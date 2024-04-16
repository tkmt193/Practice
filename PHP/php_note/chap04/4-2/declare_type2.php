<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    function twice(float $var):int{
        $var *= 2;
        return $var;
    }
    $num = 10.8;
    $result = twice($num);
    echo "{$num}の2倍は",$result;
    ?>
</body>
</html>