<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
         
         body {background-color: rgba(187, 250, 221, 0.966);
        }
        .flex-container {
            
            background-color: rgba(187, 250, 221, 0.966); 
            display: flex; 
            flex-direction: column; 
        }

        .box {
        
            padding: 25px;
            border: 5px solid  rgba(187,250,221,0.966);
        }
    
    </style>
</head>
<body>
<div class="flex-container">
<?php 
/* Connect to a MySQL database using driver invocation */
require_once('db_info.php');

try { 
    $dbh = new PDO($dsn);
    
    // この下にプログラムを書きましょう。
    $re = $dbh->query("SELECT * FROM kankou_spot;");

    print '<div class="flex-container">';
    while ($kekka = $re->fetch()) {
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
        print "<a href='kankou.html'> 口コミ </a>";
    }
    print "</div>";

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

print "<div class='box'>";
print "<a href='index.html'>初めに戻る</a>";

print "</div>"

?>

</body>
</html>