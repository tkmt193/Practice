<!-- 
コール側でのみ可変長引数を使う
-->
<?php
function add(string $header,int $number1,int $number2,int $number3=0):string{
    $total = $number1 + $number2 + $number3;
    return $header . $total;
}
$numbers = [3,2,4];
$result = add('計算結果：',...$numbers);
echo $result;
?>