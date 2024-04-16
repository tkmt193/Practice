<?php

use dynamic2\Validator;

require_once 'Validator.php';
$item = [
    [
        'name' =>
        [
            'value' => '圧力鍋',
            'value-type' => 'String'
        ],
        'price' =>
        [
            'value' => 6000,
            'value-type' => 'Price'
        ],
        'itemNumber' =>
        [
            'value' => 'ABC-9212',
            'value-type' => 'ItemNumber'
        ]
    ],
    [
        'name' =>
            [
                'value' => '圧力鍋',
                'value-type' => 'String'
            ],
        'price' =>
            [
                'value' => 3000,
                'value-type' => 'Price'
            ],
        'itemNumber' =>
            [
                'value' => 'ZOI-9212',
                'value-type' => 'ItemNumber'
            ]
    ]
];

$validator = new Validator();
foreach ($item as $i) {
    echo '⚫︎', $i['name']['value'],'の商品データをチェックします', PHP_EOL;
    foreach ($i as $property => $values) {
        $validatorMethod = 'check'.$values['value-type'];
        if ($values['value-type'] === null|| !method_exists($validator, $validatorMethod)) {
            echo '未対応のデータ形式です', PHP_EOL;
            continue;
        }
        $result = $validator->{$validatorMethod}($values['value']);
        echo $property, 'の検証結果:', $result ? 'OK' : 'NG', PHP_EOL;
    }
}