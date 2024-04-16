<!-- 
浮動小数点を比較する
少数n桁目までが等しければ等しいと判定する
-->
<?php
$a = 1.2340;
$b = 1.2345;
var_dump(abs($a-$b)< 0.1);
var_dump(abs($a-$b)< 0.01);
var_dump(abs($a-$b)< 0.001);
var_dump(abs($a-$b)< 0.0001);
var_dump(abs($a-$b)< 0.00001);

$c = '1.2340';
$d = '1.2345';
var_dump(bccomp($c, $d,1));
var_dump(bccomp($c, $d,2));
var_dump(bccomp($c, $d,3));
var_dump(bccomp($c, $d,4));
var_dump(bccomp($c, $d,5));
?>
<p>var_dump(abs($a-$b)< 0.1);<?php var_dump(abs($a-$b)< 0.1); ?></p>
<p>var_dump(abs($a-$b)< 0.01);<?php var_dump(abs($a-$b)< 0.01); ?></p>
<p>var_dump(abs($a-$b)< 0.001);<?php var_dump(abs($a-$b)< 0.001); ?></p>
<p>var_dump(abs($a-$b)< 0.0001);<?php var_dump(abs($a-$b)< 0.0001); ?></p>
<p>var_dump(abs($a-$b)< 0.00001);<?php var_dump(abs($a-$b)< 0.00001); ?></p>
<p>var_dump(bccomp($c, $d,1));<?php var_dump(bccomp($c, $d,1)); ?></p>
<p>var_dump(bccomp($c, $d,2));<?php var_dump(bccomp($c, $d,2)); ?></p>
<p>var_dump(bccomp($c, $d,3));<?php var_dump(bccomp($c, $d,3)); ?></p>
<p>var_dump(bccomp($c, $d,4));<?php var_dump(bccomp($c, $d,4)); ?></p>
<p>var_dump(bccomp($c, $d,5));<?php var_dump(bccomp($c, $d,5)); ?></p>

