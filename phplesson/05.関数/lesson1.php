<?php
// 引数として数値を渡すと3倍にして返す関数を作ってください。
function convertThreeTimes($num)
{
    $result = $num * 3;
    return $result;
}

//テスト検証
$test_number = 5;
$num_test = convertThreeTimes($test_number);
echo $num_test;
// 15