<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $kyori =20;
    $kakudo = 32*pi()/180;
    $takasa =$kyori*tan($kakudo);
    $takasa = round($takasa*10)/10;
    echo "木の高さは{$takasa}です。"
    ?>
</body>
</html>