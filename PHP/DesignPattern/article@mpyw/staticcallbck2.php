<?php
class MUR {
    private static function soudayo($option) {
        return "そうだよ（{$option}）";
    }
    public static function test() {
        $name = array(__CLASS__, 'soudayo');
        echo $name('便乗'); // そうだよ（便乗）
    }
}
MUR::test();
?>