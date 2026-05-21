<?php
// データを読み込む→$fp変数に代入
$fp = fopen('bookdata.csv', 'r');
if ($fp === false) {
    echo "ファイルのオープンに失敗しました";
    exit;
}
//1行を処理する
while ($row = fgetcsv($fp)) { //忘れがち！ = は代入
    // var_dump($row);
    echo '書籍名' . str2html($row[0]) . '<br>';
    echo '著者名' . str2html($row[4]) . '<br><br>';
}
