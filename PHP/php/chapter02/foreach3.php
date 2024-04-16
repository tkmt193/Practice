<!-- 
配列内の数値が負の場合は0に置き換える
参照：値のみ書き換え可能。キーは書き換え不可。
-->
<?php
$numbers=[3,5,-1,2];
foreach ($numbers as &$number) {
    if($number < 0){
        $number= 0;
    }
}
// ループ処理が終わった後は、必ず参照を解除する
unset($number);
?>
<pre><?php print_r($numbers);?></pre>