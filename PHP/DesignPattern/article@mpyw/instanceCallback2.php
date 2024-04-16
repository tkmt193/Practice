<?php
class MUR {
    private function soudayo($option) {
        return "そうだよ（{$option}）";
    }
    public function test() {
        $name = array($this, 'soudayo');
        echo $name('便乗'); // そうだよ（便乗）
    }
}
$mur = new MUR;
$mur->test();
?>