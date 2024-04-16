<?php
require_once 'Item.php';
require_once 'ShoppingCart.php';

$cart = new ShoppingCart();
$cart->addItem(new Item('A001', 'りんご', 100));
$cart->addItem(new Item('A002', 'みかん', 150));
$cart->addItem(new Item('A003', 'バナナ', 200));

foreach ($cart as $item) {
    echo $item . PHP_EOL;
}