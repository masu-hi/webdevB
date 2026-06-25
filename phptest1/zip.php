<?php
$zip1 = $_POST["zip1"];
$zip2 = $_POST["zip2"];
$zip = $zip1 . "-" . $zip2;

if (preg_match("/^[0-9]{3}-[0-9]{4}$/", $zip)) {
    echo "正しい郵便番号です。";
} else {
    echo "正しくありません。";
}
