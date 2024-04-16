<?php
$greetings = 'こんにちは　コンバンワ　ｺﾝﾊﾞﾝﾜ Ｈｅｌｌｏ　ＨＥＬＬＯ　HELLO　hello　１２３';
// echo mb_convert_case($greetings, MB_CASE_UPPER), PHP_EOL; //英語が全て「HELLO」になる
// echo mb_convert_case($greetings, MB_CASE_LOWER), PHP_EOL; //英語が全て「hello」になる
// echo mb_convert_case($greetings, MB_CASE_TITLE), PHP_EOL; //英語が全て「Hello」になる

// echo mb_convert_kana($greetings, 'KV'), PHP_EOL; //「ｺﾝﾊﾞﾝﾊ」が「コンバンハ」になる
// echo mb_convert_kana($greetings, 'rns'), PHP_EOL; //英数字が半角英数字に、全角スペースが半角スペースになる