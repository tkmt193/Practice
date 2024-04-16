<!-- 
例) CSVファイルの1列目をユーザーID、2列目をユーザー名として読み込む
-->
<?php
$csvUserdata = [1234,'yamada'];
list($userId,$userName) = $csvUserdata;
?>
<p>ユーザーID：<?=$userId?></p>
<p>ユーザー名：<?=$userName?></p>
