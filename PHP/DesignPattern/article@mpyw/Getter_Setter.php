<?php
//Getter_Setterパターン
/* classRobotにnameをset・nameを取得(get) */
class Robot{
    private string $name='';

    public function setName($name){
        $this->name=filter_var($name);
    }
    public function getName(){
        echo "{$this->name}";
        echo "\n";
    }
}

$roboA=new Robot();
$roboB=new Robot();

$roboA->setName('ロボ太郎');
$roboB->setName('ロボ次郎');

$roboA->getName();
$roboB->getName();

?>