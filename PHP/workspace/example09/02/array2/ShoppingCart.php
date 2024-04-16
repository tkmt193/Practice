<?php
class ShoppingCart implements IteratorAggregate, ArrayAccess
{
    private $items = [];

    public function offsetExists($offset): bool
    {
        return isset($this->items[$offset]);
    }

    public function offsetSet($offset, $value): void
    {
        if (!$value instanceof  Item){
            throw new Exception('Itemクラス以外は追加できません');
        }
        if (is_null($offset)){
            $this->items[] = $value;
        } else {
            $this->items[$offset] = $value;
        }
    }

    public function offsetUnset($offset): void
    {
        unset($this->items[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->items[$offset]) ? $this->items[$offset] : null;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }
}