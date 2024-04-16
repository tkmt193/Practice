<?php
echo '文字列を１文字ずつ分割する';
$chars = preg_split('//u', 'こんにちは HELLO',-1,PREG_SPLIT_NO_EMPTY);
print_r($chars);

echo '文字列を改行で分解する';
$diary = <<<TEXT
2019年3月15日
今日はいい天気でした。
明日も晴れるといいな。
TEXT;
$lines = preg_split('/(\r\n|\r|\n)/u', $diary);
print_r($lines);

echo '文字列を半角または全角スペースで分解する';
$words = preg_split('/[ 　]/u', 'あいうえお　かきくけこ　さしすせそ');
print_r($words);
?>
