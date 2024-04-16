<?php
interface Icecream{
    public function getName();
    public function getPrice();

}

abstract class Decorator implements Icecream{
    private $icecream;
    public function __construct(Icecream $icecream)
    {
        $this->icecream = $icecream;
    }

    public function getName()
    {
        return $this->icecream->getName();
    }

    public function getPrice()
    {
        return $this->icecream->getPrice();
    }

}

class vanillaIcecream implements Icecream{
    public function getName(){
        return "バニラアイス";
    }
    public function getPrice(){
        return 700;
    }
}

class GreenTeaIcecream implements Icecream{
    public function getName(){
        return "抹茶アイス";
    }
    public function getPrice(){
        return 1000;
    }
}

class NutsDecorator extends Decorator{
    public function __construct(Icecream $icecream)
    {
        parent::__construct($icecream);
    }

    public function getName()
    {
        return "ナッツ".parent::getName();
    }

    public function getPrice()
    {
        return parent::getPrice()+50;
    }
}

class ChocolateDecorator extends Decorator{
    public function __construct(Icecream $icecream)
    {
        parent::__construct($icecream);
    }

    public function getName()
    {
        return "チョコレート" . parent::getName();
    }

    public function getPrice()
    {
        return parent::getPrice()+100;
    }
}


$order2 = new GreenTeaIcecream();
printf($order2->getName());
printf($order2->getPrice());
printf("円\n");

$order3 = new ChocolateDecorator($order2);
printf($order3->getName());
printf($order3->getPrice());
printf("円\n");

$order4 = new NutsDecorator(new vanillaIcecream);
printf($order4->getName());
printf($order4->getPrice());
printf("円\n");


?>
