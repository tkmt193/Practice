<!-- 
論理型、null型、空文字はecho命令で出力しても目に見えないため、
var_dump命令を使って出力する。
-->
<?php
$integerValue = 10;
$floataValue = 12.34;
$stringValue1 = 'Hello, world!';
$stringValue2 = "Hello, world!";
$boolValue = false;
$nullVaule = null;
$emptyStringValue = '';
?>
<p><?php echo $integerValue; ?></p>
<p><?php echo $floataValue; ?></p>
<p><?php echo $stringValue1; ?></p>
<p><?php echo $stringValue2; ?></p>
<p><?php var_dump($boolValue); ?></p>
<p><?php var_dump($nullVaule); ?></p>
<p><?php var_dump($emptyStringValue); ?></p>
