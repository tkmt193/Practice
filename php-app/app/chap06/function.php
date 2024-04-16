<?php
declare(strict_types=1);
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

function escape(string $value){
    return htmlspecialchars(strval($value), ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

function escapeLike(?string $value){
    return preg_replace('/([_%#])/u', '#${1}', $value);
}