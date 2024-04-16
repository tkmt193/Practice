<?php
declare(strict_types=1);
require_once dirname(__FILE__) . '/function.php';

try {
    if(!isset($_GET['id']) || trim($_GET['id']) === ''){
        return;
    }
    $pdo = connect();
    $statement = $pdo->prepare("SELECT * FROM books WHERE title LIKE :title ESCAPE '#' ORDER BY published DESC");
    $statement->bindValue(":title", '%'. escapeLike($_GET["id"]).'%', PDO::PARAM_STR);
    $statement->execute();
} catch (PDOException $e) {
    echo $e->getMessage();
    echo '検索に失敗しました。';
    return;
}
?>
<body>
    <h1>「<?=escape($_GET['title']) ?>」検索結果</h1>
    <table border="1">
        <tr>
            <th>タイトル</th>
            <th>価格</th>
            <th>出版日</th>
        </tr>
        <?php while ($row = $statement->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?php escape($row['title']); ?></td>
            <td><?php escape(number_format($row['price'])); ?></td>
            <td><?php escape($row['published']); ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
