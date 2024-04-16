<!-- 
配列：同じ種類の値をまとめて格納するデータ型
連想配列：関連するが異なる種類の値をまとめて格納するデータ型
配列も連想配列も、本質的には同じもの
-->
<?php
$airports = [
    [
        'name' => '羽田',
        'adress'=> '東京都大田区',
    ],
    [
        'name' => '成田',
        'adress'=> '千葉県成田市',
    ],
    [
        'name' => '中部国際',
        'adress'=> '愛知県常滑市',
    ]
];
$airports[] = [
    'name' => '関西国際',
    'adress'=> '大阪府泉佐野市',
];
?>
<p><?= $airports[0]['name'] ?> - <?= $airports[0]['adress']?></p>
<p><?= $airports[1]['name'] ?> - <?= $airports[1]['adress']?></p>
<p><?= $airports[2]['name'] ?> - <?= $airports[2]['adress']?></p>
<p><?= $airports[3]['name'] ?> - <?= $airports[3]['adress']?></p>
<p><pre><?php print_r($airports);?></pre></p>