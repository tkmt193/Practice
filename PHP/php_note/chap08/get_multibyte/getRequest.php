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
    $data = "東京";
    $data = rawurlencode($data);
    $url = "checkData.php";
    echo "<a href={$url}?data={$data}>","送信する","</a>";
    ?>
    </div>
</body>
</html>