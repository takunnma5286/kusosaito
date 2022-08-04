<!DOCTYPE_html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>検索中、、、。</title>
</head>
<body>
    <?php
    // print_r($_POST);
    // Mysql
        $dbh = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', 'test', 'test');
        echo '<p>';
        echo '接続完了しました';
        echo '</p>';

        $name = $_POST['do'];
        $sql = 'INSERT INTO kensaku (rireki) VALUES (?)';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(1, $name, PDO::PARAM_STR);
        $stmt->execute();
        echo '<p>';
        echo '記録しました';
        echo '</p>';

        $dbh = null;

    echo '<p>';
    echo '正常に処理が完了しました、googleなページへ転送します';
    echo '<meta http-equiv="refresh" content="0;url=https://www.google.com/search?q=';
    echo htmlspecialchars($_POST['do'], ENT_QUOTES);
    echo '">';
    echo '</p>';
    ?>
</body>
</html>