<?php
$freeWord = 'A.T';
$books =[
    'A.T.車の運転マナー',
    'OAuthによるWEB認証',
    '睡眠は枕で変わる'
];
echo 'エスケープなしで本を検索する';
foreach ($books as $book){
    if (preg_match('/'.$freeWord.'/ui', $book)){
        echo $book, PHP_EOL;
    }
}

echo 'エスケープありで本を検索する';
foreach ($books as $book){
    if (preg_match('/'.preg_quote($freeWord, '/').'/ui', $book)){
        echo $book, PHP_EOL;
    }
}