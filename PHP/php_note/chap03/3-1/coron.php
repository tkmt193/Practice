<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>コロンで区切ったif構文
    </title>
</head>
<body>
    <?php $age=14; ?>
    <?php if ($age<=15): ?>
        15歳以下の料金は500円です。
    <?php elseif ($age<=19): ?>
        19歳以下の料金は1000円です。
    <?php else: ?>
        20歳以上の料金は2000円です。
    <?php endif;?>
</body>
</html>