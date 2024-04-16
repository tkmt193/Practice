<?php
// URL上問題ない文字列
echo '「teststring」をURLエンコードします',PHP_EOL;
$encoded = urlencode('teststring');
echo $encoded,PHP_EOL;
$decoded = urldecode($encoded);
echo $decoded,PHP_EOL;

// 日本語はURLに含めることができない
echo '「こんにちは」をURLエンコードします',PHP_EOL;
$encoded = urlencode('こんにちは');
echo $encoded,PHP_EOL;
$decoded = urldecode($encoded);
echo $decoded,PHP_EOL;

// 一部の半角記号はURLに含めることができない
echo '「!#$%&\'()*+,-./:;<=>?@[]^_`{|}~」をURLエンコードします',PHP_EOL;
$encoded = urlencode('!#$%&\'()*+,-./:;<=>?@[]^_`{|}~');
echo $encoded,PHP_EOL;
$decoded = urldecode($encoded);
echo $decoded,PHP_EOL;
?>