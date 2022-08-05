<head>
    <link href="mudana.css" rel="stylesheet" type="text/css" media="all">
    <meta charset="UTF-8">
    <title>わがまま修学旅行アンケート結果</title>
</head>
<?php
    //sql
        $dbh = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', 'test', 'test');
        echo '<p>';
        echo '接続完了しました';
        echo '</p>';
        
    
    $sql = 'SELECT * FROM kensaku';
    $stmt = $dbh->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);;
    foreach($result as $row){
        echo '<tr>' . PHP_EOL;
        echo '<td>' . htmlspecialchars($row['rireki'], ENT_QUOTES) . '</td>' . PHP_EOL;
        echo '<br>';
    }
$dbh = null;
?>