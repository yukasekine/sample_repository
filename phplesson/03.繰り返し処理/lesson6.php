<?php
// 以下配列の中身をfor文を使用して表示してください。
// 表が縦横に伸びてもある程度対応できるように柔軟な作りを目指してください。
// 表示はHTMLの<table>タグを使用すること

/**
 * 表示イメージ
 *  _________________________
 *  |_____|_c1|_c2|_c3|横合計|
 *  |___r1|_10|__5|_20|___35|
 *  |___r2|__7|__8|_12|___27|
 *  |___r3|_25|__9|130|__164|
 *  |縦合計|_42|_22|162|__226|
 *  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
 */

$arr = [
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テーブル表示</title>
<style>
table {
    border:1px solid #000;
    border-collapse: collapse;
}
th, td {
    border:1px solid #000;
}
</style>
</head>
<body>
    <!-- ここにテーブル表示 -->
    <table>
        <tr>
            <th></th>
            <?php
            for ($i = 1; $i <= count($arr['r1']); $i++) {
                $cKey = "c" . $i;
                echo "<th>" . $cKey . "</th>";
            } ?>
            <th>横合計</th>
        </tr>
        <?php

        // 1行作る繰り返し処理
        for ($j = 1; $j <= count($arr); $j++) {
            // 横合計の初期化
            $rTotal = 0;
            echo "<tr>";
            $rKey = "r" . $j;
            echo "<td>" . $rKey . "</td>";

            // 表の数値出力の繰り返し処理
            for ($k = 1; $k <= count($arr[$rKey]); $k++) {
                $cKey = "c" . $k;

                //縦合計の処理　

                if (!empty($cTotalArray[$k - 1])) {
                    $cTotalArray[$k - 1] = $cTotalArray[$k - 1] + $arr[$rKey][$cKey];
                } else {
                    $cTotalArray[$k - 1] = $arr[$rKey][$cKey];
                }
                // 数値の出力
                echo "<td>". $arr[$rKey][$cKey]."</td>";
                // 横合計の計算
                $rTotal += $arr[$rKey][$cKey];
            }
            echo "<td>" . $rTotal . "</td>";
            echo "</tr>";
        }
        $totalsum = 0;
        echo "<tr>"."<td>"."縦合計"."</td>";
            for($l=0; $l < count($cTotalArray); $l++){
                echo "<td>".$cTotalArray[$l]."</td>";
                $totalsum += $cTotalArray[$l];
            }
            echo "<td>".$totalsum."</td>";
            echo "</tr>";
        ?>
    </table>       
</body>
</html>