<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>XSS対策</title>
</head>
<body>
    <div>
    <?php
    function es($data, $charset){
        if (is_array($data)){
            return array_map(__METHOD__, $data);
        } else {
            return htmlspecialchars($data, ENT_QUOTES, $charset);
        }
    } 

    $myCode = "<h2>テスト1</h2>";
    $myArray = ["a"=>"<p>赤</p>","b"=>"<script>alert('hello')</script>"];

    echo '$myCodeの値：', es($myCode);
    echo '$myArrayの値：';
    print_r(es($myArray));
    ?>
    </div>
</body>
</html>