<?php 
$value = 'World';
$compbined1 = 'Hello' . $value . '!';
$compbined2 = "Hello{$value}!";
$compbined3 = 'Hello';
$compbined3 .= $value;
$compbined3 .= '!';
$compbined4 = 'Hello{$value}!';
?>
<p><?php $compbined1; ?></p>
<p><?php $compbined2; ?></p>
<p><?php $compbined3; ?></p>
<p><?php $compbined4; ?></p>