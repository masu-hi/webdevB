<?php
require_once './functions.php';

//idをバリデーションして、通過したものだけ
if (empty($_GET['id'])) {
    echo "idを指定してください";
    exit;
}

if (!preg_match('/\A\d{1,11}\z/', $_GET['id'])) {
    echo 'idが正しくありません。';
    exit;
}

//整数型に変換
$id = (int) $_GET['id'];


$dbh = db_open();

$sql = "SELECT id, title, isbn, price, publish, author FROM books WHERE id = :id";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$result) {
    echo "指定したデータはありません。";
    exit;
}

//取得したデータをフォームに配置
$title = str2html($result['title']);
$isbn = str2html($result['isbn']);
$price = str2html($result['price']);
$publish = str2html($result['publish']);
$author = str2html($result['author']);
$id = str2html($result['id']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍編集</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>書籍データ編集</h1>
    </header>

    <form action="update.php" method="post">
        <p>
            <label for="title">書籍名（必須：200文字まで）：</label>
            <input type="text" id="title" name="title" value="<?php echo $title; ?>" required>
        </p>
        <p>
            <label for="isbn">ISBN（13桁までの数字）：</label>
            <input type="text" id="isbn" name="isbn" value="<?php echo $isbn; ?>">
        </p>
        <p>
            <label for="price">価格（6桁までの数字）：</label>
            <input type="text" id="price" name="price" value="<?php echo $price; ?>">
        </p>
        <p>
            <label for="publish">出版日：</label>
            <input type="date" id="publish" name="publish" value="<?php echo $publish; ?>" required>
        </p>
        <p>
            <label for="author">著者名（80文字まで）：</label>
            <input type="text" id="author" name="author" value="<?php echo $author; ?>">
        </p>
        <p>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        </p>
        <button type="submit">更新する</button>
    </form>
    <p><a href="list.php">リストにもどる</a></p>
</body>
</html>
