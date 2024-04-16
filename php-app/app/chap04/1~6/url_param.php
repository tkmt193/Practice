<?php
$url = 'https://example.com/search.php?freeword=cooking&categories[0]=books&categories[1]=dvd&debug=1';
$urlElements = parse_url($url);
echo 'URLのパース結果',PHP_EOL;
print_r($urlElements);

$queries = [];
parse_str($urlElements['query'], $queries);
echo 'クエリ文字列のパース結果',PHP_EOL;
print_r($queries);

unset($queries['debug']);
$newQery = http_build_query($queries);
echo 'クエリ文字列の組み立て結果',PHP_EOL;
print_r(urldecode($newQery));
echo PHP_EOL;

echo 'URLの組み立て結果',PHP_EOL;
$newUrl = $urlElements['scheme'].'://'.$urlElements['host'].$urlElements['path'].'?'.$newQery;
print_r(urldecode($newUrl));
?>