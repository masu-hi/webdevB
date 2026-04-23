<?php
$a = ["田中", "井上"];
echo $a[0];

echo "<br>";

//連想配列 キーがある配列
$name = [
    'sato' => '佐藤',
    'suzuki' => '鈴木',
    'takahashi' => '高橋'
];
echo $name['takahashi'];
//var_dumpは値を全部表示する
// var_dump($name);
//string = 文字列

echo "<br>";

//自動的に要素の数だけループする
//ループすると、配列の要素がそれぞれasの後の変数に代入されル
//処理がループの数だけ実行される
foreach ($name as $value) {
    echo '名前は' . $value . '<br>';
}

//キーを扱う場合の書き方
foreach ($name as $key => $value) {
    echo 'キーは' . $key . '、名前は' . $value . "<br>";
}

$people[0] = '亀頭';
$people[1] = '森';
$people[2] = '棚橋';

foreach ($people as $key => $value) {
    echo 'キーは' . $key . '、名前は' . $value . '<br>';
}

$a = ['A', 'B', 'C'];

var_dump($a);

$b[] = 'C';
$b[] = 'D';
$b[] = 'E';

var_dump($b);

$c = array('E', 'F', 'G');
//近年では[]のほうが使われる
