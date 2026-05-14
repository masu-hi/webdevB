<?php

$users = [
    ['name' => '佐藤', 'age' => 25],
    ['name' => '田中', 'age' => 30],
];
#  1. 上記の配列をすべて表示してください。
foreach ($users as $profile) {
    var_dump($profile);
}
#  2. 各ユーザーの「名前は○○さん、年齢は○○歳です」と表示してください。
foreach ($users as $users_key => $profile) { //　☓これはキーを扱う場合の書き方なので、=>　はなし
    echo '名前は' . $profile['name'] . 'さん' . '、年齢は' . $profile['age'] . '歳です' . "<br>";
}

$numbers = [
    [1, 2],
    [3, 4],
];
$zero = 0;
#  3. 配列内の全ての数字を合計して出力してください。
foreach ($numbers as $num) {
    foreach ($num as $value) {
        $zero = $zero + $value; //$zero += $value;
    }
}
echo $zero . "<br>";

$prefectures = [
    '東京' => ['新宿', '渋谷', '池袋'],
    '大阪' => ['梅田', '難波', '天王寺'],
];
#  4. 都道府県ごとの市区町村名をすべて出力してください。
foreach ($prefectures as $place => $city) {
    echo $place . "の市区町村は" . implode("、", $city) . "です。<br>";
}
$matrix = [
    [1, 5, 7],
    [3, 8, 2],
];
#  5. 上記の配列の中から、値が5以上のものだけ表示してください。

foreach ($matrix as $row) {
    foreach ($row as $value) {
        if ($value >= 5) {
            echo $value . "<br>";
        }
    }
}
