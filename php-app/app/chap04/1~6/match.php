<?php
$match = [];
echo '住所から郵便番号を見つける';
$address = '123-4567 東京都渋谷区道玄坂2-10-1';
preg_match('/\A[0-9]{3}-[0-9]{4}/u', $address, $match,PREG_OFFSET_CAPTURE);
print_r($match);

echo '文字列から16進数表記のカラーコードを見つける';
$string = 'darkvoilet - 濃いすみれ色 - #9400D3';
preg_match('/#[0-9A-F]{6}/ui', $string, $match,PREG_OFFSET_CAPTURE);
print_r($match);

echo '半角数字及びハイフンのみかを入力チェックする';
$input = '03-９９９９-0000';
if(preg_match('/\A[0-9\-]+\z/u', $input)){
    echo '入力された値は半角数字とハイフンのみです。',PHP_EOL;
} else {
    echo '入力された値は半角数字とハイフン以外の文字が含まれています。',PHP_EOL;
}

echo '半角英数字のみかを入力チェックする';
$input = 'Hello123';
if(preg_match('/\A[a-zA-Z0-9]+\z/u', $input)){
    echo '入力された値は半角数字とハイフンのみです。',PHP_EOL;
} else {
    echo '入力された値は半角数字とハイフン以外の文字が含まれています。',PHP_EOL;
}

echo '半角英数字のみかを入力チェックする';
$input = 'Hello123';
if(preg_match('/\A[a-z0-9]+\z/ui', $input)){
    echo '入力された値は半角数字とハイフンのみです。',PHP_EOL;
} else {
    echo '入力された値は半角数字とハイフン以外の文字が含まれています。',PHP_EOL;
}