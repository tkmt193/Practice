<!-- 
クロージャーを使わずに２パターンの出力を実現する
-->
<?php
define('EXTRA_PRINT_MODE_USER', 1);
define('EXTRA_PRINT_MODE_SELLER', 2);
function printPurchased(array $items, int $extraPrintMode):void{
    echo '<table border = "1">';
    echo '<tr>';
    echo '<th>購入日</th>';
    echo '<th>商品名</th>';
    echo '<th>価格</th>';
    echo '<th>その他</th>';
    echo '</tr>';
    foreach($items as $item){
        echo '<tr>';
        echo '<td>',$item['date'],'</td>';
        echo '<td>',$item['name'],'</td>';
        echo '<td>',$item['price'],'</td>';
        $extraData = '';
        if($extraPrintMode === EXTRA_PRINT_MODE_USER){
            $extraData = "色：{$item['color']}、サイズ：{$item['size']}";
        } elseif($extraPrintMode === EXTRA_PRINT_MODE_SELLER){
            $extraData = "ユーザーID：{$item['user-id']}、商品No: {$item['item-number']}";
        }
        echo '<td>',$extraData,'</td>';
        echo '</tr>';
    }
    echo'</table>';
}
$items = [
    [
        'user-id'=> 'tanaka-1234',
        'date'=> '2018-11-12',
        'name'=> 'ドレスシャツ',
        'price'=> '2161',
        'color'=> 'white',
        'size'=> 'M',
        'item-number'=> 91025,
        'serial'=> 'PLGO1219',
    ],
    [
        'user-id'=> 'tanaka-1234',
        'date'=> '2018-09-05',
        'name'=> 'キッズパジャマ',
        'price'=> '1620',
        'color'=> 'red',
        'size'=> 110,
        'item-number'=> 90081,
        'serial'=> 'ZAQ80124',
    ]
    ];
    echo '<h3>ユーザーの購入商品一覧</h3>';
    printPurchased($items, EXTRA_PRINT_MODE_USER);
    echo '<h3>販売事業者専用の購入商品一覧</h3>';
    printPurchased($items, EXTRA_PRINT_MODE_SELLER);
?>