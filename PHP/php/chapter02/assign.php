<!-- 
参照渡し
-->
<?php
$greeting1 = 'Hello';
$greeting2 = &$greeting1;
$greeting1 = 'こんにちは';
?>
<p>greeting1: <?= $greeting1 ?></p>
<p>greeting2: <?= $greeting2 ?></p>