<?php
echo '年月日をドットから-に変換';
$date = '2015.12.31';
$date = preg_replace('/([0-9]{4})\.([0-9]{2})\.([0-9]{2})/u', '${1}-${2}-${3}', $date);
echo $date, PHP_EOL;

echo '[LINK]~[/LINK]を<a href="~">~</a>に変換';
$string = '[LINK]http://www.wings.msn.to/[/LINK]はWINGSプロジェクトが提供するサイトです。';
// $string = preg_replace('/\[LINK\](.*)\[\/LINK\]/u', '<a href="${1}">${1}</a>', $string);
$string = preg_replace('/(\[LINK\])(http:\/\/.+)(\[\/LINK\])/ui', '<a href="${2}">${2}</a>', $string);
echo $string, PHP_EOL;