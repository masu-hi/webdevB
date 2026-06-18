<!-- list.php -->
<?php
include __DIR__ . '/inc/header.php';

require_once __DIR__ . '/inc/functions.php';

try {
    //関数の実行
    $dbh = db_open();
    $sql = 'SELECT * FROM books';
    $statement = $dbh->query($sql);
?>
    <table class="book-table">
        <thead>
            <tr>
                <th class="col-action">操作</th>
                <th class="col-title">書籍名</th>
                <th class="col-isbn">ISBN</th>
                <th class="col-price">価格</th>
                <th class="col-date">出版日</th>
                <th class="col-author">著者名</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $statement->fetch()): ?>
                <tr>
                    <td class="col-action">
                        <a href="edit.php?id=<?php echo (int) $row['id']; ?>" class="btn-update">更新</a>
                    </td>
                    <td class="col-title"><?php echo str2html($row['title']); ?></td>
                    <td class="col-isbn"><?php echo str2html($row['isbn']); ?></td>
                    <td class="col-price">¥<?php echo number_format((int)$row['price']); ?></td>
                    <td class="col-date"><?php echo str2html($row['publish']); ?></td>
                    <td class="col-author"><?php echo str2html($row['author']); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php
} catch (PDOException $e) {
    echo "エラー！: " . str2html($e->getMessage());
    exit;
}

include __DIR__ . '/inc/footer.php';
?>