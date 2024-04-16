<!-- 
配列の合成には、加算演算子とarray_merge()関数があります。
配列：
・同一キー番号があった場合、加算演算子は前の値を優先します
・array_merge()は、同一キー番号があった場合、番号を変えて末尾に追加します。
連想配列：
・同一キーがあった場合、加算演算子は前の値を優先します
・array_merge()は、同一キーがあった場合、後の値で上書きします。
-->
<?php
$arrr1 = ['a','b'];
$arrr2 = ['d','e','f'];
$mergedA = $arrr1 + $arrr2;
$mergedB = $arrr2 + $arrr1;
$mergedC = array_merge($arrr1, $arrr2);
$mergedD = array_merge($arrr2, $arrr1);
?>
<p>配列の結合</p>
<p>配列1: <?= print_r($mergedA) ?></p>
<p>配列2: <?= print_r($mergedB) ?></p>
<p>配列3: <?= print_r($mergedC) ?></p>
<p>配列4: <?= print_r($mergedD) ?></p>

<?php
$arrr1 = [
    'a' => 'A',
    'b' => 'B',
    ];
$arrr2 = [
    'a' => 'C',
    'b' => 'D',
    'c' => 'E',];
$mergedA = $arrr1 + $arrr2;
$mergedB = $arrr2 + $arrr1;
$mergedC = array_merge($arrr1, $arrr2);
$mergedD = array_merge($arrr2, $arrr1);
?>
<p>配列の結合</p>
<p>配列1: <?= print_r($mergedA) ?></p>
<p>配列2: <?= print_r($mergedB) ?></p>
<p>配列3: <?= print_r($mergedC) ?></p>
<p>配列4: <?= print_r($mergedD) ?></p>