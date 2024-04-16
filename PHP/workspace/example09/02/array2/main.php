<?php
require_once 'Item.php';
require_once 'ShoppingCart.php';

$cart = new ShoppingCart();
$cart['A001'] = new Item('A001', 'りんご', 200);
$cart['A002'] = new Item('A002', 'みかん', 150);
$cart['A003'] = new Item('A003', 'バナナ', 200);

foreach ($cart as $item) {
    echo $item . PHP_EOL;
}