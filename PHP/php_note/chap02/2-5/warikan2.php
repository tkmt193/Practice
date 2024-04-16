<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $kingaku = 11.6;
    $amari=$kingaku%4.1;
    $hitori=($kingaku - $amari)/4.1;
    echo "1人{$hitori}円、不足{$amari}円";
    ?>
</body>
</html>
