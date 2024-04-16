<?php
require_once("ShopBiz.php");
class MyShop extends ShopBiz{
    public function thanks(){
        echo "ありがとうございました。","\n";
    }
    public function hanbai($tanka,$kosu){
        $price = $tanka*$kosu;
        $this->sell($price);
    }
    public function getUriage(){
        echo "売上合計は、{$this->uriage}円です。";
    }
}
?>