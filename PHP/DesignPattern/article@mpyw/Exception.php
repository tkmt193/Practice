<?php
/*
例外処理を使ってゼロ除算の時エラーを返す

 */
function div($a,$b){
    if ($a > 0 && $b == 0){
        return INF;
    }
    if ($a < 0 && $b == 0){
        return -INF;
    }
    if ($a == 0 && $b == 0){
        throw new Exception('ゼロ除算とか無理ってはっきりわかんだね');
    }
    return $a /$b;
}

try{
    echo "計算を始めます\n";
    printf("div(1,0) = %s\n",div(1,0));
    printf("div(-1,0) = %s\n",div(-1,0));
    printf("div(0,0) = %s\n",div(0,0));
    echo "計算は正常に終了しました\n";
} catch (Exception $e){
    echo $e->getMessage()."\n";
    echo "そんなことしてはいけない（戒め）\n";
}

?>