<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $myFunc = function($who){
        echo "{$who}さん、こんにちは！";
    }; //代入なのでコロンが必要
    $myFunc("田中");
    ?>
</body>
</html>