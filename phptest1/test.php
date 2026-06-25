<?php
//① 変数 $a = 5 と $b = 3があります。$aを更新しecho $a;で結果が 8と画面に表示されるプログラムを記述してください。
$a = 5;
$b = 3;

$a = $a + $b;
echo $a . "<br>";

//② 変数 $nameにクラスメイトの名字"◯◯"を代入し 、.=を使って"さん、元気？" を追加して "◯◯さん、元気？" と表示させてください。

$name = "加藤";
$name .= "さん、元気？";

echo $name . "<br>";

//③ $total = 1000に税込10%を加えた金額（整数）を表示するコードを書いてください。

$total = 1000;
echo $total * 0.1 + $total . "<br>";

//④ 次の条件に従って、PHPでスコア判定プログラムを作成しなさい。
//0から100までのランダムな整数を変数$scoreに代入する。
//「スコア: ○○」の形式でスコアを表示する。
//スコアが80以上なら「優」、60以上80未満なら「良」、それ以外は「可」と表示する。

$score = rand(0, 100);
echo "スコア: " . $score . "<br>";
if ($score >= 80) {
    echo "優";
} elseif ($score >= 60) {
    echo "良";
} else {
    echo "可";
}

echo "<br>";

//⑤ 1〜100のうち、3の倍数だけを改行付きで表示してください。

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . "<br>";
    }
}

//⑥ 連想配列 $person = ['name' => 'Taro', 'age' => 20] のキーと値を「name: Taro」の形式で出力するコードをforeachを使って書いてください。

$person = ['name' => 'Taro', 'age' => 20];



//⑦ 次の2次元配列$usersには、複数人の名前・年齢・スコアが格納されています。
//各ユーザーについて「名前: 年齢歳, スコア: ○○, 判定: △△」の形式で1人ずつ表示するPHPコードを書きなさい。
//判定はスコアが80以上なら「優」、60以上80未満なら「良」、それ以外は「可」とすること。

$users = [
    ['name' => 'Ken', 'age' => 20, 'score' => 85],
    ['name' => 'Yui', 'age' => 22, 'score' => 78],
    ['name' => 'Taro', 'age' => 19, 'score' => 55]
];

foreach ($users as $user) {
    if ($user['score'] >= 80) {
        $judge = "優";
    } elseif ($user['score'] >= 60) {
        $judge = "良";
    } else {
        $judge = "可";
    }

    echo $user['name'] . ": " . $user['age'] . "歳, スコア: " . $user['score'] . ", 判定: " . $judge . "<br>";
}

//⑧ 問題④そのままで、記述方法を制御構文（代替構文）に変換して答えてください。
?>
<?php
$score = rand(0, 100);
?>

<p>スコア: <?= $score; ?></p>
<?php if ($score >= 80): ?>
    <p>優</p>
<?php elseif ($score >= 60): ?>
    <p>良</p>
<?php else: ?>
    <p>可</p>
<?php endif; ?>

<?php
//⑨ functions.phpに定義された関数 greet() を読み込んで実行するコードを書いてください。エラーが出たら処理を停止させるようにしてください。

require "functions.php";
greet();


//⑩ 以下のフォームから送信された値（name と comment）をPHPで受け取り、〇〇さんのコメント：〇〇と表示するコードを書いてください。

//receive.php

//⑪ 下記のフォームから正しい郵便番号形式で送られてくるかを正規表現で判定するプログラムzip.phpを記述してください。
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>郵便番号フォーム</title>
</head>

<body>
    <form action="zip.php" method="post" id="registration-form">
        <label for="zip1">郵便番号（3桁-4桁）</label><br />
        <input type="text" name="zip1" id="zip1" /> -
        <input type="text" name="zip2" id="zip2" />
    </form>
    <button type="submit" form="registration-form">送信する</button>
    <button type="button" id="changeBtn">数値変更</button>
    <script>
        // ランダムな郵便番号を生成する
        const zipCandidates = ["100-0001", "150-0042", "160-0022", "123-4567", "999-9999", "001-0001", "750-0025", "12-34567", "abc-defg", "0000-000"];

        function setRandomZip() {
            const random = zipCandidates[Math.floor(Math.random() * zipCandidates.length)];
            const [zip1, zip2] = random.split("-");
            document.getElementById("zip1").value = zip1 || "";
            document.getElementById("zip2").value = zip2 || "";
        }
        document.getElementById("changeBtn").addEventListener("click", setRandomZip);
        setRandomZip();
    </script>
</body>

</html>

<?php
// ⑫ 教科書p164からを参照に授業に使っているデータベース「sample_db」に新しいテーブル「members」を4カラムで作成して、メンバーを追加できる仕組みを制作してください。登録フォームは下記のコードを使用してください。
// *
// id（A_Iにチェック）
// affiliation（20文字まで）
// name（15文字まで）
// age（3桁まで）
// 初期データは、https://docs.google.com/spreadsheets/d/1ppbvVnbIGd_chK3EGZzChT4LE4H0duCCe484xIXO9c8/edit?usp=sharing
// を.csvにダウンロードしてインポートさせてください。
// functions.phpは授業で利用しているものを複製して使用
// DBのパスワードはテーブルを追加しただけなので、変わらないです。（記録していますか？）
// エラーハンドリングやバリデーションも頑張って追加してください。
// ほぼ、教科書通りです。