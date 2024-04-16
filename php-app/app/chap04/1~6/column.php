<?php
$userList = [
    [
        'name' => '田中太郎',
        'age' => 20,
        'prefecture' => '東京都',
        'hobby' => '読書'
    ],
    [
        'name' => '山田花子',
        'age' => 25,
        'prefecture' => '神奈川県',
        'hobby' => '旅行'
    ],
    [
        'name' => '佐藤次郎',
        'age' => 30,
        'prefecture' => '埼玉県',
        'hobby' => '映画鑑賞'
    ]
    ];

    echo 'prefectureキーの値のみ取得' . PHP_EOL;
    $prefectures = array_column($userList, 'prefecture');
    print_r($prefectures);

    echo 'prefectureキーのみを取得し、戻り値はnameとする' . PHP_EOL;
    $prefectures = array_column($userList, 'prefecture', 'name');
    print_r($prefectures);

    echo '全てのキーを取得し、戻り値はnameとする' . PHP_EOL;
    $prefectures = array_column($userList, null, 'name');
    print_r($prefectures);
