
<!-- 
if~elseifを組み合わせた場合、上から順に条件式が判断され、初めにマッチした条件式に対応する処理が実行されます。
$bool1がtrueの場合、$bool2と$bool3の条件式は判断されません。
-->

<?php
$bool1 = false;
$bool2 = true;
$bool3 = true;
if($bool1 === true) {
    echo 'bool1 is true',PHP_EOL;
} else if($bool2 === true) {
    echo 'bool2 is true',PHP_EOL;
} else if($bool3 === true) {
    echo 'bool3 is true',PHP_EOL;
}
?>
<!-- $bool3も出力したい場合、次のようにifのみで表現する -->
<?php
$bool1 = false;
$bool2 = true;
$bool3 = true;
if($bool1 === true) {
    echo 'bool1 is true',PHP_EOL;
} 
if($bool2 === true) {
    echo 'bool2 is true',PHP_EOL;
} 
if($bool3 === true) {
    echo 'bool3 is true',PHP_EOL;
}
?>