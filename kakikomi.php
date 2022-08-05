<!DOCTYPE_html>
<html lang="ja">
<link rel="icon" href="favicon.ico">
<head>
    <meta charset="UTF-8">
    <title>書き込みます</title>
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
    ?>
</body>
</html>