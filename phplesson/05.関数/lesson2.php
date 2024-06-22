    <?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 現在時刻を自動的に取得するPHPの関数があるので調べて実装してみて下さい。
// 実行するとその都度現在の日本の日時に合わせて出力されるされるようになればOKです。
// 日時がおかしい場合、PHPのタイムゾーン設定を確認して下さい。


// ・現在日時（xxxx年xx月xx日（x曜日））
// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
// ・2020年元旦から現在までの経過日数 (ddd日)
date_default_timezone_set('Asia/Tokyo');
$week =[
    '日', //0
    '月', //1
    '火', //2
    '水', //3
    '木', //4
    '金', //5
    '土', //6
];
$date = date('w');
$three_days_later = strtotime('+3 day');
$twelve_hours_before = strtotime('-12hour');
$today = date("Y-m-d");
$today = strtotime($today);
$day = strtotime('2020-01-01');

echo date ("Y年m月d日 $week[$date]曜日");
echo "<br>";
echo date("Y年m月d日 H時i分s秒",$three_days_later);
echo "<br>";
echo date("Y年m月d日 H時i分s秒",$twelve_hours_before);
echo "<br>";
$elapsed_days = ($today - $day) / (60 * 60 * 24);
echo $elapsed_days."日";