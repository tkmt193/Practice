<?php declare(strict_types=1); ?>
<?php
//ホスト名、データベース名、文字コードの３つを定義する
$host = 'mysql-container';
$db = 'demo';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host; dbname=$db; charset=$charset";

//ユーザー名、パスワード
$user = 'root';
$pass = 'root';
try {
    //上のデータを引数に入れて、PDOインスタンスを作成
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $errorModeString = null;
    switch ($pdo->getAttribute(PDO::ATTR_ERRMODE)) {
        case PDO::ERRMODE_SILENT:
            $errorModeString = 'PDO::ERRMODE_SILENT';
            break;
        case PDO::ERRMODE_WARNING:
            $errorModeString = 'ERRMODE_WARNING';
            break;
        case PDO::ERRMODE_EXCEPTION:
            $errorModeString = 'ERRMODE_EXCEPTION';
            break;
        default:
            $errorModeString = 'undifined';
    }
    echo '現在のエラーモード：' . $errorModeString . '<br>';
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>