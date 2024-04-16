<?php
class MUR {
    public function soudayo($option) {
        return "そうだよ（{$option}）";
    }
}
$mur = new MUR;
$name = array($mur, 'soudayo');
echo $name('便乗'); // そうだよ（便乗）
?>