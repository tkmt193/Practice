<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
    function myFunc(){
        //全ての引数
        $allArgs = func_get_args();
        //引数の合計
        $total = array_sum($allArgs);
        //引数の個数
        $numArgs = func_num_args();
        if ($numArgs>0){
            $average = $total/$numArgs;
            $lastValue = func_get_arg($numArgs-1);
        } else {
            $lastValue = $average = $total = "データ無し";
        }
        echo "合計点",$total,"\n";
        echo "平均点",$average,"\n";
        echo "最後の点数",$lastValue,"\n";
    }

    myFunc(43,67,55,75);

    ?>
</body>
</html>