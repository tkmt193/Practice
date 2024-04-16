<!-- SJIS→UTF-8できない.... -->
<?php
// ファイルの内容を取得
$contents = file_get_contents('books.txt');
// エンコーディングを検出
$encoding = mb_detect_encoding($contents, 'SJIS,UTF-8,EUC-JP,JIS');
// エンコーディングを出力
echo $encoding;
var_dump($contents);
$books = file('books.txt');
// mb_convert_encodingで１行づつ変換
// var_dump($books);
foreach ($books as $book){
    echo mb_convert_encoding($book, 'UTF-8', 'SJIS'), PHP_EOL;
}
// mb_convert_variablesで配列の中身を一括変換
mb_convert_variables('UTF-8', 'SJIS', $books);
foreach ($books as $book){
    echo $book, PHP_EOL;
}