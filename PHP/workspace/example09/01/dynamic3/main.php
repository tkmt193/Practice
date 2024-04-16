<?php
require_once 'TaxCalculatorDining.php';
require_once 'TaxCalculatorTakeOut.php';
$orders =  [
    [
        'name' => '唐揚げ弁当',
        'price' => 800,
        'type' => 'Dining'
    ],
    [
        'name' => 'お好み焼き弁当',
        'price' => 500,
        'type' => 'TakeOut'
    ],
    [
        'name' => '唐揚げ弁当',
        'price' => 800,
        'type' => 'TakeOut'
    ]
];

foreach ($orders as $order){
    $taxClassName = 'TaxCalculator' . $order['type'];
    if (!class_exists($taxClassName)) {
        echo '未対応の注文方法です', PHP_EOL;
        continue;
    }
    $taxInstance = new $taxClassName();
    echo $order['name'], $order['type'], 'の税込価格:', $taxInstance->calculate($order['price']), PHP_EOL;
}
