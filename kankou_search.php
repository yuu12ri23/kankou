<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
    </style>
</head>
<body>

<?php 
/* Connect to a MySQL database using driver invocation */
require_once('db_info.php');

try { 
    $dbh = new PDO($dsn);
    
    // この下にプログラムを書きましょう。
    $search = $_POST["search"];  // 入力された検索する文字列

    $re = $dbh->query("SELECT * FROM kankou WHERE machi LIKE '%{$search}%';");
    print "$re<br>";
    print "<div class='box'>";
    print $kekka[0];
    print "($kekka[1])";
    print "<br>";
    print "<説明>";
    print "<br>";
    print $kekka[2];
    print "<br>";
    print "<img src='{$kekka[3]}' alt='画像の説明文' width='200' height='250'>";
    print "</div>";
    }
    print "</div>";


} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>

</body>
</html>