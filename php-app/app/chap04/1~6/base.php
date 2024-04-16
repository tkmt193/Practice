<?php
$string = 'こんにちは';
$encoded = base64_encode($string);
echo '文字列をエンコードしました。',PHP_EOL;
echo $encoded, PHP_EOL;

$decoded = base64_decode($encoded);
echo '文字列をデコードしました。',PHP_EOL;
echo $decoded, PHP_EOL;

$binaryImage = file_get_contents(dirname(__FILE__) . '/いくあいこん.jpg');
$encodedImage = base64_encode($binaryImage);
echo 'バイナリデータをエンコードしました。',PHP_EOL;
echo $encodedImage, PHP_EOL;

file_put_contents(dirname(__FILE__) . '/いくあいこん_decode.jpg', base64_decode($encodedImage));
echo 'バイナリデータをデコードしました。',PHP_EOL;
?>