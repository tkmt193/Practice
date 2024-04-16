<!-- 
定数：特別な意味を持つ値に名前をつける
・値に人間的な意味を持たせる
・値を変更できないようにする
-->
<?php
define('TAX_PERCENT',0.08);
define('SMTP_HOST','example.com');
?>
<p>消費税率は<?=TAX_PERCENT; ?>です。</p>
<p>100円の税込金額は<?=100+100*TAX_PERCENT; ?>円です。</p>
<p>SMTPサーバーは<?=SMTP_HOST; ?>です。</p>