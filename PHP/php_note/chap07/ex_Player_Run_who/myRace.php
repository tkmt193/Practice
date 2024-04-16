<?php
require_once("Runner.php");
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Runnerクラスを利用する</title>
</head>
<body>
    <pre>
    <?php
        $runner1 = new Runner("福士",23);
        $runner1->who();
    ?>
    </pre>
</body>