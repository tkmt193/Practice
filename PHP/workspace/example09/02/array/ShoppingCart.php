<?php
class ShoppingCart implements IteratorAggregate
{
    private $items = [];

    public function addItem(Item $item): void
    {
        $this->items[$item->getItemNumber()] = $item;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }
}