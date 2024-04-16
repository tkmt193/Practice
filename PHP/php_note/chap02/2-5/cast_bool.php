<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $theData = new DateTime();
    $isAccess = (bool)$theData;
    var_dump($isAccess);
    ?>
</body>
</html>
