<?php
$str = "1234567";
$rtn = preg_match('/\d{7}/u', $str, $match);
$str = "1234567あ";
$rtn = preg_match('/\d{7}/u', $str, $match);
$str = "111-1234567";
$rtn = preg_match('/\d{7}/u', $str, $match);

echo "結果1<br>";
var_dump($rtn);
echo "<br>";
echo "結果2<br>";
var_dump($rtn);
echo "<br>";
echo "結果3<br>";
var_dump($rtn);
