<?php
class MUR {
    public static function soudayo($option) {
        return "そうだよ（{$option}）";
    }
}
$name = array('MUR', 'soudayo');
echo $name('便乗'); // そうだよ（便乗）

?>

