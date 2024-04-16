<!-- 
リファレンス値渡しを使ってエラーメッセージをセットする
-->

<?php
function checkNumber($value)
{
    return is_numeric($value) && (int)$value > 0;
}
function add($a, $b, &$errorMessage)
{
    if (!checkNumber($a)) {
        $a=0;
        $errorMessage = "引数が正の整数ではありません";
    }
    if (!checkNumber($b)) {
        $b= 0;
        $errorMessage = "引数が正の整数ではありません";
    }
    $total = $a + $b;
    return $total;
}
$errorMessage = null;
$result = add(3,10,$errorMessage);
echo '計算結果：',$result,$errorMessage,PHP_EOL;
$errorMessage = null;
$result = add(4,-5,$errorMessage);
echo '計算結果',$result,$errorMessage,PHP_EOL;
?>