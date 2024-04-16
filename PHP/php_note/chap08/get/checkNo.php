<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>フォーム入力の基本(GET)</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
    <div>
    <?php
    $no = $_GET["no"];
    $nolist=[3,5,7,8,9];
    if (in_array($no,$nolist)){
        echo "{$no}はありました。";
    } else {
        echo "{$no}は見つかりません。";
    }
    ?>
    </div>
</body>
</html>