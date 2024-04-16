<?php
class Staff {
    public $name;
    public $age;
    function  __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }


    public function hello(){
        if (is_null($this->name)) {
            echo "こんにちは！","\n";
        } else {
            echo "こんにちは、{$this->name}です！","\n";
        }
    } 
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>クラスを定義する</title>
</head>
<body>
<pre>
    <?php
    $hana = new Staff("花",21);
    $taro = new Staff("太郎",35);
    //インスタンスを確認
    print_r($hana);
    print_r($taro);
    //メソッドを実行
    $hana->hello();
    $taro->hello();
    ?>
</pre>
</body>
