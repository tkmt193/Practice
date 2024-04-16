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
    $data = $_GET["data"];
    $data = rawurldecode($data);
    echo "「{$data}」を受け取りました。";
    ?>
    </div>
</body>
</html>