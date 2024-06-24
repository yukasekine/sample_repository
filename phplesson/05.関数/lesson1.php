<?php
// 引数として数値を渡すと3倍にして返す関数を作ってください。
function convertThreeTimes($num)
{
    echo $num * 3;
}
convertThreeTimes($num);

//テスト検証
$num_test = 5;
echo convertThreeTimes($num_test);
// 15