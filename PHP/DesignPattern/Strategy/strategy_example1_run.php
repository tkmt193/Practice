<?php
/* 実行&HTMLで表示 */
require_once('strategy.php');

function getSNSInstance($mysns) {
    switch ($mysns) {
        case 'instagram':
            return new MyInstagram;
        case 'twitter':
            return new MyTwitter;
    }
}

function SNSData($mysns){
    $mysns = getSNSInstance($mysns);
    $mysnscontext = new MySNS($mysns);
    return $mysnscontext->execute();
}

$mysns = SNSData('twitter');

?>
<?php
echo "    <ul>";
echo "        <li>$mysns[name]</li>";
echo "        <li>$mysns[id]</li>";
echo "        <li>$mysns[link]</li>";
echo "    </ul>";
?>