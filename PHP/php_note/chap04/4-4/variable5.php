<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $msg = "ありがとう";
    $myFunc = function ($who) use ($msg){
        echo "{$who}さん、".$msg;
    };
    $myFunc("田中");
    ?>
</body>
</html>