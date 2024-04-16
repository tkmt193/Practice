<?php declare(strict_types=1); ?>
<!-- 
シャローコピー
オブジェクトのコピーを作成するとき、プロパティもコピーするには、ディープコピー（__cloneを定義）する。
-->
<?php
require_once dirname(__FILE__) . '/Customer.php';
require_once dirname(__FILE__) . '/Adress.php';
$customer1 = new Customer('山田太郎', new Address('東京都', '渋谷区'));
$customer2 = clone $customer1;
$customer2->changeName('山田花子');
$customer2->changeAddress('東京都', '横浜市');
print_r($customer1);
print_r($customer2);

?>