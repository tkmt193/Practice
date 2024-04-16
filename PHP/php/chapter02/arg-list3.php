<!-- 
定義側・コール側の両方で可変長変数を使う
-->
<?php
function add(string $header,int ...$numbers):string{
    $total = 0;
    foreach($numbers as $number){
        $total += $number;
    }
    return $header . $total;
}
$numbers = [3,2,4];
$result = add('計算結果：',...$numbers);
echo $result;
?>