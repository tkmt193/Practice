<!-- 
論理演算子：判定が確定した時点で、その後の条件式は無視する
論理和：|| or どちらかがtrueならtrue
論理積：&& and どちらもtrueならtrue
論理否定：! trueならfalse、falseならtrue
排他的論理和：xor どちらか一方がtrueならtrue

defined(~)||die('エラーメッセージ');
-->
<?php
// 以下のコメントを外すと出力はhttp://example.com/になる
// define('URL_BASE', 'http://example.com/');
define('URL_BASE') || define('URL_BASE', 'http://example.com/');
echo 'URL_BASE is :',URL_BASE;
?>