<?php
class Staff {
    public $name;
    public $age;
    public function hello(){
        echo "こんにちは","\n";
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
    $hana = new Staff();
    $taro = new Staff();
    $hana->name="花";
    $hana->age=21;
    $taro->name="太郎";
    $taro->age=35;
    //インスタンスを確認
    print_r($hana);
    print_r($taro);
    //メソッドを実行
    $hana->hello();
    $taro->hello();
    ?>
</pre>
</body>
