<!DOCTYPE_html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>検索中、、、。</title>
</head>
<body>
    <?php
    // print_r($_POST);
    echo '<meta http-equiv="refresh" content="0;url=https://www.google.com/search?q=';
    echo htmlspecialchars($_POST['name'], ENT_QUOTES);
    echo '">';
    echo '<br>';
    ?>
</body>
</html>