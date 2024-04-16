<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    function team($name, ...$members){
        $list =implode("、",$members);
        return "{$name}:{$list}";
    }
    $team1 = team("Peach","佐藤","田中","加藤");
    $team2 = team("カボス","ひろし","冴子");
    echo $team1."<br>".PHP_EOL;
    echo $team2;
    ?>
</body>
</html>