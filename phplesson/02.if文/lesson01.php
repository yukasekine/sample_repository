﻿<?php
// 変数に値を代入し、
// その値が50より大きければ
// 「50より大きい」
// 50より小さければ
// 「50より小さい」
// 50と同値であれば
// 「50です」
// という文字列を出力してください。

// また最低限どういう値でテストすればいいか
// 確認したテスト値をコメントアウトですべて示してください。

$score = 51;

if ($score > 50) {
  echo '50より大きい'; //51という値でテストをするとこちらが表示されます
} elseif($score < 50) {
  echo '50より小さい'; //49という値でテストをするとこちらが表示されます
} elseif($score = 50) {
  echo '50です';//50という値でテストをするとこちらが表示されます
}
?>
