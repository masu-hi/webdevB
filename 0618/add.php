<?php
require_once __DIR__ . '/inc/functions.php';
include __DIR__ . '/inc/error_check.php';
include __DIR__ . '/inc/header.php';


try {
    //返り値を持ったfunctions.php
    //関数の実行
    $dbh = db_open();

    //sql文を作った
    $sql = "INSERT INTO books (id, title , isbn, price, publish, author) VALUES (NULL, :title, :isbn, :price, :publish, :author)";
    //sql文を実行した->返り値が$statementに入った
    $stmt = $dbh->prepare($sql);

    //整数型に変換。なぜ？ formから取得する値は、すべて文字列型
    $price = (int) $_POST['price'];
    $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(':isbn', $_POST['isbn'], PDO::PARAM_STR);
    //ここだけ変換した変数を取得しています
    $stmt->bindParam(':price', $price, PDO::PARAM_INT);
    $stmt->bindParam(':publish', $_POST['publish'], PDO::PARAM_STR);
    $stmt->bindParam(':author', $_POST['author'], PDO::PARAM_STR);

    $stmt->execute();
    echo "データが格納されました。";
    echo '<a href = "index.php">リストにもどる</a>';
} catch (PDOException $e) {
    echo "エラー！:" . str2html($e->getMessage()) . "<br>";
    exit;
}

include __DIR__ . '/inc/footer.php';
