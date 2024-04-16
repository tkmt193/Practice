<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    function hello($who){
        echo "{$who}さんこんにちは";
    }
    function bye($who){
        echo "{$who}さんBye";
    }
    $msg = "bye";
    if (function_exists($msg)){
        $msg("金太郎");
    }
    ?>
</body>
</html>