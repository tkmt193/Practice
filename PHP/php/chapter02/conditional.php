<!-- 
三項演算子（条件演算子）：式1 ? 式2 : 式3
式1がtrueの場合は式2、falseの場合は式3が評価される
null合体演算子：
変数1 ?? 変数2
変数1がnullの場合は変数2が評価される
-->
<pre>
<?php
$greeting = null;
$message = $greeting === null ? 'Hello' : $greeting;
echo 'あいさつは',$message,PHP_EOL;

$greeting = 'Good Morning';
$message = $greeting === null ? 'Hello': $greeting;
echo 'あいさつは',$message,PHP_EOL;

$greeting = null;
$message = $greeting ?? 'Hello';
echo 'あいさつは',$message,PHP_EOL;

$greeting = 'Good Morning';
$message = $greeting ??'Hello';
echo 'あいさつは',$message,PHP_EOL;
?>
</pre>