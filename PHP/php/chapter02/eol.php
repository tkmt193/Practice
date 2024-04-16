<!-- 
    PHP_EOLは、改行コードを表す定数です。
    Windowsでは、改行コードは「\r\n」です。
    LinuxやMacでは、改行コードは「\n」です。
    PHP_EOLを使うことで、OSに依存しない改行コードを出力できます。
-->
<?php
$mailBody = "お問い合わせを受け付けました。" . PHP_EOL;
$mailBody .= "お問い合わせ内容：" . PHP_EOL;
$mailBody .= "\t商品番号「abcd」について、サイズを教えてください。";
?>
<p><pre><?=$mailBody ?></pre></p>