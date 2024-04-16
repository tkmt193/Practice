<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $now = new DateTime();
    $isDate = $now instanceof DateTime;
    var_dump($isDate);
    ?>
</body>
</html>
