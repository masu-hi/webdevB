<?php
$condition = false;
if ($condition) echo "条件はtrueです。";

$a = 2;
if ($a === 1) {
    echo "aは1です。";
}

$b = 1;
$c = 2;
if ($b < $c) {
    echo "bはcよりも小さいです";
}

$d = "1";
if ($d == 1) {
    echo "dは1です。";
}
//==は方を自動変換するため実行されるが、===は型も同じでないと実行されない
