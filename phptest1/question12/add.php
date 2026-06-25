<?php

require_once __DIR__ . '/functions.php';

$group = $_POST['group'];
$name = $_POST['name'];
$age = $_POST['age'];

// バリデーション
if ($group == '' || $name == '' || $age == '') {
    exit('未入力の項目があります。');
}

if (mb_strlen($group) > 20) {
    exit('所属グループは20文字以内で入力してください。');
}

if (mb_strlen($name) > 15) {
    exit('名前は15文字以内で入力してください。');
}

if (!is_numeric($age)) {
    exit('年齢は数字で入力してください。');
}

if ($age > 999 || $age < 0) {
    exit('年齢は3桁以内で入力してください。');
}

try {

    $dbh = db_open();

    $sql = "INSERT INTO members(affiliation, name, age)
            VALUES(:affiliation, :name, :age)";

    $stmt = $dbh->prepare($sql);

    $stmt->bindValue(':affiliation', $group);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':age', $age);

    $stmt->execute();

    header('Location: form.php');
    exit();
} catch (PDOException $e) {

    exit($e->getMessage());
}
