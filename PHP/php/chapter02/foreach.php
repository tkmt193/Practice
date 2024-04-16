<?php
$colors = [
    'red' => '赤',
    'blue' => '青',
    'yellow' => '黄'];
foreach ($colors as $key => $value) {
    echo "<p>キーは{$key}、値は{$value}です。</p>";
}
?>

<?php
$colors = ['赤', '青', '黄'];
foreach ($colors as $key => $value) {
    echo "<p>キーは{$key}、値は{$value}です。</p>";
}
?>
