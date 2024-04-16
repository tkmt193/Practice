<!-- 
可変長引数 （...$a）：引数の数が可変の関数
-->
<?php
function add(string $header,int ...$numbers):string{
    $total = 0;
    foreach($numbers as $number){
        $total += $number;
    }
    return $header . $total;
}
$result = add('計算結果：',3,2,9,1);
echo $result;
?>
