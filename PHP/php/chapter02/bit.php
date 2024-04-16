<!-- 
ビット演算
-->
<?php
define('BIT_RED', 1<<0); //「0001」
define('BIT_BLUE',1<<1); //「0010」
define('BIT_YELLOW',1<<2); //「0100」
define('BIT_GREEN',1<<3); //「1000」
$colors = 0;
$colors = BIT_BLUE | BIT_YELLOW; //「0010」と「0100」の論理和をとって「0110」
$statuses = [
    'red'=> ($colors & BIT_RED) > 0,
    'blue'=> ($colors & BIT_BLUE) > 0,
    'yellow'=> ($colors & BIT_YELLOW) > 0,
    'green'=> ($colors & BIT_GREEN) > 0
];
?>
<p>赤のボタンはONですか？<?php var_dump($statuses['red']);?></p>
<p>青のボタンはONですか？<?php var_dump($statuses['blue']);?></p>
<p>黄のボタンはONですか？<?php var_dump($statuses['yellow']);?></p>
<p>緑のボタンはONですか？<?php var_dump($statuses['green']);?></p>

