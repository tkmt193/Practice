<!-- 
宇宙演算子：<=>
左辺が大きい場合は1
右辺が大きい場合は-1
等しい場合は0
usort関数との組み合わせで、配列の要素をソートすることができる
-->
<?php $point = 85; ?>
<?php
var_dump($point <=> 85);
var_dump($point <=> 70);
var_dump($point <=> 99);
?>