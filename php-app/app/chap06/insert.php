<?php declare(strict_types=1); ?>
<?php
function connect(): PDO{
    //ホスト名、データベース名、文字コードの３つを定義する
    $host = 'mysql-container';
    $db = 'demo';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host; dbname=$db; charset=$charset";

    //ユーザー名、パスワード
    $user = 'root';
    $pass = 'root';
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    return $pdo;
}

try {
$pdo = connect();
$statement = $pdo->prepare('INSERT INTO books(created, title, price) VALUES(CURRENT_TIMESTAMP, :title, :price)');
$statement->bindValue(':title', 'aaaaa', PDO::PARAM_STR);
$statement->bindValue(':price', 820,PDO::PARAM_INT);
$statement->execute();
$newId = $pdo->lastInsertId();
echo '新しい本を登録しました。新しいレコードのIDは',$newId,'です';
} catch (PDOException $e) {
    echo $e->getMessage();
    echo '登録に失敗しました。';
}
?>