<!DOCTYPE html>
<head>
    <meta charset = "utf-8">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
    $kokugo=67;
    $sansu=72;
    $rika=85;
    $goukei = $kokugo+$sansu+$rika;
    $heikin=$goukei/3;
    echo "合計：",$goukei,"<br>";
    echo "平均点:",$heikin
    ?>
</body>