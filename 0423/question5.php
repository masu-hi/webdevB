<?php
# 1. 配列 ['赤', '青', '黄'] を作成し、foreach で各要素を1行ずつ表示してください。
$a = ['赤', '青', '黄'];
foreach ($a as $color) {
    echo $color . "<br>";
}
# 2. ['りんご' => 150, 'バナナ' => 120, 'みかん' => 100] の配列から「フルーツ名：価格円」と表示してください。
$b = ['りんご' => 150, 'バナナ' => 120, 'みかん' => 100];
foreach ($b as $key => $fruits) {
    echo $key . "：" . $fruits . "円" . "<br>";
}
# 3. [100, 200, 300] という配列の合計値を求めて表示してください（foreach を使って）。
$numbers = [100, 200, 300];
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}
echo $sum . "<br>";

# 4. ['PHP', 'JavaScript', 'Python'] という配列に foreach を使って、インデックス番号と一緒に表示してください（例: 0: PHP）。
$d = ['PHP', 'JavaScript', 'Python']; //キーを書いていない場合はechoしたら自然にインデックス番号が表示される
foreach ($d as $key => $value) {
    echo $key . "：" . $value . "<br>";
}
# 5. ['A', 'B', 'C'] の各要素に「さん」を付けて表示してください（例: Aさん）。
$e = ['A', 'B', 'C'];
foreach ($e as $name) {
    echo $name . "さん" . "<br>";
}
# 6. [10, 20, 30] の各値を2倍にして出力してください。
$f = [10, 20, 30];
foreach ($f as $num) {
    echo $num * 2 . "<br>";
}
