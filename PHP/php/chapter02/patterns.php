<?php
/* 単一の条件式 */
$point = 90;
if($point >= 80){
    $message = "ハイスコアです";
} else {
    $message = "通常スコアです";
}
?>
<? echo $message; ?>

<?php
/* 論理演算子 */
$point = -30;
if($point < 0 || $point >100){
    $message = 'ポイント値が不正です';
} else {
    $message = 'ポイント値は正常です';
}
?>
<? echo $message; ?>

<?php
/* 真偽値を返すPHPの命令を使った条件式 */
$point = '90A';
if(!is_numeric($point)){
    $message = 'ポイント値が数値ではありません';
} else {
    $message = 'ポイント値は数値です';
}
?>
<? echo $message; ?>

<?php
/* 数値を返すPHPの命令を使った条件式。数値は暗黙歴に真偽値に変換される */
$places = ['東京','大阪','京都'];
if(count($places)){
    $message = '配列には要素があります';
} else {
    $message = '配列には要素がありません';
}
?>
<? echo $message; ?>