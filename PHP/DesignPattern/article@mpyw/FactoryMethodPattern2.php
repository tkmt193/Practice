<?php
/*
Improvements　ver1.0
- problem
    - $color can be changed (Must not be changed)
- solution
    - コンストラクタの第2引数に red を渡して生成したインスタンスを返す createRedRobot メソッドを静的に作成します。
    - コンストラクタの第2引数に blue を渡して生成したインスタンスを返す createBlueRobot メソッドを静的に作成します。
    - コンストラクタを private にし、外部から直接インスタンスを生成出来ないようにします。


*/
class Robot{
    private $name='';
    private $color;
    public static function createRedRobot($name){
        return new self($name,'red');
    }
    public static function createBlueRobot($name){
        return new self($name,'blue');
    }
    private function __construct($name,$color){
        $this->setName($name);
        $this->color = $color;
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
//静的メソッドを呼び出してインスタンスを作成
$roboA = Robot::createRedRobot('ロボ太郎');
echo $roboA->getColor();
/* 下記のような例ではエラー
$roboB = new Robot('ロボ次郎');
$roboB = new Robot('ロボ次郎','blue');
echo $roboB->getColor();
*/

?>
