<?php
$price = [100, 200, 300,'150',2500,900];
echo '配列をソートする' . PHP_EOL;
sort($price);
print_r($price);

echo '配列を逆順にソートする' . PHP_EOL;
rsort($price);
print_r($price);

echo '配列を文字数としてソートする' . PHP_EOL;
sort($price, SORT_STRING);
print_r($price);

$files = ['file105.txt','file1.txt', 'file44.txt','file10.txt', 'file2.txt'];
echo '配列を自然順にソートする' . PHP_EOL;
sort($files, SORT_NATURAL);
print_r($files);

$items = [
    1000001 => '商品A',
    1000002 => '商品B',
    1000003 => '商品C',
    1000004 => '商品D',
];

echo '配列をキーでソートする' . PHP_EOL;
ksort($items);
print_r($items);

echo '配列を逆順にキーでソートする' . PHP_EOL;
krsort($items);
print_r($items);