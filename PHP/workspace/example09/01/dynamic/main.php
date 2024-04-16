<?php

namespace dynamic;
$items = [];
$items[] = new Item('Item 1', 10);
$items[] = new Item('Item 2', 20);

$properties = [
    'name' => '商品名',
    'price' => '価格'
];

foreach ($items as $item) {
    foreach ($properties as $property => $label) {
        echo $label, ':', $item->{$property}, PHP_EOL;
    }
}

class Item
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}