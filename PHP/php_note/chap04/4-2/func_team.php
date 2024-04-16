<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    function team($name, ...$members){
        print_r($name.PHP_EOL);
        print_r($members);
    }
    team("Peach","佐藤","田中","加藤");
    ?>
</body>
</html>