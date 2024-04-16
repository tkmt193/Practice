<?php
$chars = ['a', 'b', 'c'];
echo '配列に要素を追加する' . PHP_EOL;
$chars[] = 'd'; //一つずつ追加
array_push($chars, 'e', 'f', 'g'); //複数追加
print_r($chars);

echo '配列の最初に要素を追加する' . PHP_EOL;
array_unshift($chars, 'z', 'y', 'x');
print_r($chars);

echo '二つの配列を結合する' . PHP_EOL;
$chars = array_merge($chars, ['h', 'i', 'j']);
print_r($chars);

echo '配列の先頭の要素を取り出す' . PHP_EOL;
echo array_shift($chars) . PHP_EOL;
print_r($chars);

echo '配列の末尾の要素を取り出す' . PHP_EOL;
echo array_pop($chars) . PHP_EOL;
print_r($chars);

echo '配列のキー番号２から５要素分切り出す' . PHP_EOL;
$sliced = array_slice($chars, 2, 5);
print_r($sliced);
print_r($chars);

echo '配列のキー番号２の要素を削除する' . PHP_EOL;
unset($chars[2]);
print_r($chars);