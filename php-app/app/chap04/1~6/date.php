<?php
date_default_timezone_set('Asia/Tokyo');
echo '現在は', date('Y-m-d H:i:s'), 'です', PHP_EOL;
$dateTime = new DateTime('2019-02-25 17:12:34');
echo $dateTime->format('Y年m月d日 H時i分s秒'), PHP_EOL;

echo (new DateTime('2019-02-25'))->format('Y年m月d日 H時i分s秒'), PHP_EOL;

$dateTime = new DateTime();
echo $dateTime->format('Y-m-d H:i:s'), PHP_EOL;

$dateTime = new DateTime('+3 hours');
echo $dateTime->format('Y-m-d H:i:s'), PHP_EOL;

$dateTime = new DateTime();
$dateTime->setDate(2019, 2, 25);
echo $dateTime->format('Y-m-d H:i:s'), PHP_EOL;

$dateTime = new DateTime();
$dateTime->setDate(2019, 2, 25)->setTime(17, 12, 34);
echo $dateTime->format('Y-m-d H:i:s'), PHP_EOL;

echo (new DateTime('2019-02-25 17:12:34'))
->modify('+5 days')
->modify('+12 hours')
->format('Y-m-d H:i:s'), PHP_EOL;

echo (new DateTime('2019-02-25 17:12:34'))
->modify('Next Saturday')
->setTime(0,0,0)
->format('Y-m-d H:i:s'), PHP_EOL;

$dateTime = new DateTime('2019-02-25 17:12:34');
$dateTime->setTime  :s'), PHP_EOL;
