<?php
echo "変更前の文字コード", mb_internal_encoding(), PHP_EOL;
mb_internal_encoding('SJIS-win');
echo "変更後の文字コード", mb_internal_encoding(), PHP_EOL;
?>