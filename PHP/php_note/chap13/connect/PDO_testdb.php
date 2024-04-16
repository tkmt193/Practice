<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>PDOでデータベースに接続する</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <div>
    <?php
    $user = 'testuser';
    $password = 'ikumisan';
    $dbName = 'testdb';
    $host = 'localhost:8889';
    $dsn = "myspl:host={$host};dbname={$dbName};charset=utf8";

    try {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "データベースに接続しました。";
        $pdo = NULL;
    } catch (Exception $e){
        echo '<span class="error">エラーがありました</span><br>';
        echo $e->getMessage();
        exit();
    }
    ?>
    </div>
</body>
</html>