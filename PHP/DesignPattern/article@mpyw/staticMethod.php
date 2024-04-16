<?php
/*単なる静的メソッドの集合体としてクラスを定義する*/
class Html {
    public static function encode($str) {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
    }
    public static function decode($str) {
        return html_entity_decode($str, ENT_QUOTES, 'UTF-8');
    }
    private function __construct() { }
}

$html = '<strong>Test</strong>';
$encode = Html::encode($html);
echo $encode; // &lt;strong&gt;Test&lt;/strong&gt;
$decode = Html::decode($html);
echo $decode; // <strong>Test</strong>
?>