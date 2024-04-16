<?php
require_once("Soccer.php");
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Soccerクラスを利用する</title>
</head>
<body>
    <pre>
        <?php
        $player = new Soccer("シンジ");
        $player->who();
        $player->play();
        ?>
        <?php
        $player2 = new Soccer("つばさ");
        echo "{$player2}";
        ?>
    </pre>
</body>