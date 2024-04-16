<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <pre>
    <?php
    for ($i=0; $i<=3; $i++){
        for($j=0; $j<=5; $j++){
            echo "{$i}-{$j}"."|";
        }
        echo PHP_EOL;
    }
    ?>
    </pre>

</body>