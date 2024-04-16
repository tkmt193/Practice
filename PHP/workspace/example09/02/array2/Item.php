<?php
class Item
{
    private $name;
    private $price;
    private $itemNumber;

    public function __construct(string $itemNumber, string $name ,int $price)
    {
        $this->name = $name;
        $this->price = $price;
        $this->itemNumber = $itemNumber;
    }

    public function getItemNumber(): string
    {
        return $this->itemNumber;
    }

    public function __toString()
    {
        return $this->name . ':' . $this->price . '円';
    }
}