<?php
$user = [
    'name' => '田中太郎',
    'age' => 20,
    'prefecture' => '東京都',
    'hobby' => '読書'
];

echo '連想配列のキーのみ取得' . PHP_EOL;
$keys = array_keys($user);
print_r($keys);

echo '連想配列キーのうち、値として"東京都"を持つもののみ取得' . PHP_EOL;
$prefectureKeys = array_keys($user, '東京都', true);
print_r($prefectureKeys);

echo '連想配列キーのうち、値として"20"を持つもののみ取得' . PHP_EOL;
$ageKeys = array_keys($user, '20', true);
print_r($ageKeys);

echo '連想配列の値のみ取得' . PHP_EOL;
$values = array_values($user);
print_r($values);