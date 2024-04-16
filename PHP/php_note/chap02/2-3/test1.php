<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link href="./css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    /* 定義済み変数 */
    echo $GLOBALS;
    echo $_SERVER;
    echo $_GET;
    echo $_POST;
    echo $_FILES;
    echo $_REQUEST;
    echo $_SESSION;
    echo $_ENV;
    echo $_COOKIE;
    echo $php_errormsg;
    echo $HTTP_RAW_POST_DATA;
    echo $http_response_header;
    echo $argc;
    echo $argv;

    ?>

</body>