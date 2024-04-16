<?php
    require_once("Staff.php");
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>クラスを読み込んで利用</title>
</head>
<body>
<pre>
    <?php
    $hana = new Staff("花",21);
    $taro = new Staff("太郎",35);
    //インスタンスを確認
    print_r($hana);
    print_r($taro);
    //メソッドを実行
    $hana->hello();
    $taro->hello();
    ?>
</pre>
</body>
