<?php
    require_once("Staff.php");
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>クラスメンバーを使う</title>
</head>
<body>
<pre>
    <?php
    Staff::deposit(100);
    Staff::deposit(150);

    echo Staff::$piggyBank,"円になりました\n";

    $hana = new Staff("花",21);
    $taro = new Staff("太郎",21);
    $hana->latePenalty();
    echo Staff::$piggyBank,"円になりました\n";
    ?>
</pre>
</body>
