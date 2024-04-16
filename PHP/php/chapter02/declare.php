<!-- 
nullを引数として受け取ったり、nullを戻り値として返すことを許容する関数を作る場合は、
データ型名の前に「?」を付ける。
-->
<?php
/* ２つの数値を足し算して出力する関数 */
function add(int $a, int $b, ?string &$errorMessage): int{
    if($a <= 0 || $b <= 0){
        $errorMessage = '引数は正の整数を指定してください';
        return 0;
    }
    return $a + $b;
}
$errorMessage = null;
$result = add(3,10,$errorMessage);
echo $result,$errorMessage,PHP_EOL;

$errorMessage = null;
$result = add(3,-5,$errorMessage);
echo $result,$errorMessage,PHP_EOL;
?>