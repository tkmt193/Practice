<!-- 
for ループを配列のループ処理に使う
-->
<?php
$lines = [
    'いろはにほへと',
    'ちりぬるを',
    'わかよたれそ'
];
for ($lineNumber = 1;$lineNumber <= count($lines);$lineNumber++){
    echo $lineNumber . '行目：' . $lines[$lineNumber - 1] . '<br>';
}
?>