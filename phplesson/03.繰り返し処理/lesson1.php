﻿<?php
// 配列に「日本,アメリカ,イギリス,フランス」を格納し、foreach文を使って順番に下記のフォーマットで出力して下さい。
// 要素番号:国名

$country = array( '日本', 'アメリカ', 'イギリス', 'フランス' );
 foreach ( $country as $index => $value ) {
  echo $index. "：". $value. "<br>";
 }
?>