<?php
//消費税に加えた値を求める関数の定義
//int ← 整数
function tax(int $price)
{
    // echo $price * 1.1;
    return $price * 1.1;
}
//「関数の実行」　関数名 + ()
echo "<br>";

// $a = 300;
// tax($a); 関数だけで完結する
$sample_price = tax(1000); //変数に関数を代入している
// echo '消費税込みの値段：' . $sample_price . '円<br>';
// echo '消費税込みの値段：' . tax(1000) . '円';
//関数で処理してもらって、その後に操作が必要なのか
echo '消費税込みの値段：' . tax('文字列') . '円';

//JavaScriptは、型宣言ができません。
//JavaScriptに型宣言ができるようにしたものが、TypeScriptになります。
//このTypeは、型のことです。