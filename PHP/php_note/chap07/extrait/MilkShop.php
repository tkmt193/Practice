<?php
require_once("Milk.php");
$myMilk = new Milk();
echo "作成日:",$myMilk->theDate;
echo "\n";
echo "期限日:",$myMilk->limitDate;
echo "\n";
?>