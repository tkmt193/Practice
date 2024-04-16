<?php
$sentence = '今日1sは、良い日です。';
var_dump(mb_strpos($sentence, '日'));
var_dump(mb_strpos($sentence, 's'));
var_dump(mb_strpos($sentence, '良い日'));
var_dump(mb_strrpos($sentence, '日'));
if(mb_strpos($sentence, '日') !== false){
    echo '日が含まれています。', PHP_EOL;
}else{
    echo '日が含まれていません。', PHP_EOL;
}

