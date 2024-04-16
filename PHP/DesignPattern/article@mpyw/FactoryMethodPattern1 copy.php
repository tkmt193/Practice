<?php
/*
#Implement FactoryMethodPattern
Robot class has {$name} and {$color}.
(It's defined when generated and use setName method when difine $name)
method:
- setname
    - input name ,return nothing
- getname
    - return name
- getcolor
    - return color

#Attention
Deprecated:Optional parameter $name declared before required parameter $color is implicitly treated as a required parameter
→colorより先に$nameを定義しているので、__construct($name='')→ private $name=''とすると治った

*/
class Robot{
    private $name='';
    private $color;
    public function __construct($name,$color){
        $this->setName($name);
        $this->color = $color === 'blue' ? 'blue' : 'red';
    }
    public function setName($name){
        $this->name=(string)filter_var($name);
    }
    public function getName(){
        return $this->name;
    }
    public function getColor(){
        return $this->color;

    }
}
$roboA=new Robot('ロボ太郎','');
$roboB=new Robot('ロボ次郎','blue');
echo $roboA->getColor();
echo "\n";
echo $roboB->getColor();
?>
