<?php
class KarateTeamMember {
    public function comment($sentence, $option = '') {
        if ($option === '') {
            return $sentence;
        } else {
            return "{$sentence}（{$option}）";
        }
    }
}
class YJSNPI extends KarateTeamMember {
    public function say($sentence, $option = '') {
        echo 'YJSNPI「' . $this->comment($sentence, $option) . '」' . PHP_EOL;
    }
}
class MUR extends KarateTeamMember {
    public function say($sentence, $option = '') {
        echo 'MUR「' . $this->comment($sentence, $option) . '」' . PHP_EOL;
    }
}
class KMR extends KarateTeamMember {
    public function say($sentence, $option = '') {
        echo 'KMR「' . $this->comment($sentence, $option) . '」' . PHP_EOL;
    }
}

$yjs = new YJSNPI;
$mur = new MUR;
$kmr = new KMR;
$yjs->say('じゃけん夜行きましょうね');
$mur->say('おっそうだな');
$mur->say('あ、そうだ', '唐突');
$mur->say('おいKMRァ、さっき俺等が着替えてるときチラチラ見てただろ');
$kmr->say('いや見てないです');
$mur->say('ウソつけぜったいみてたゾ', 'クレしん');
$kmr->say('何で見る必要なんかあるんですか', '正論');
$yjs->say('KMRさお前さ、さっきヌッ、脱ぎ終わった時にさ、なかなか出て来なかったよな？');
$mur->say('そうだよ', '便乗');
?>