<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
         
         body {background-color: rgba(187, 250, 221, 0.966);
        }
        .flex-container {
            padding: 25px;
            border: 5px solid rgb(255, 255, 255);
            text-align: center;
        }
            

        .box {
        
            padding: 25px;
            border: 5px solid  rgb(255, 255, 255);
            
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
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $katumoto = $_POST["katumoto"];
    $asibe = $_POST["asibe"];
    $gounoura = $_POST["gounoura"];
    $isida = $_POST["isida"];
    // この下にプログラムを書きましょう
    
    if($katumoto){
        $re=$dbh->query("SELECT * FROM kankou_spot WHERE machi LIKE '勝本町';");
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
            print "<a href='kankou_search.php'> 口コミ </a>";
        }
    }
    
    if($asibe){
        $re=$dbh->query("SELECT * FROM kankou_spot WHERE machi LIKE '芦辺町';");
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
            print "<a href='kankou_search.php'> 口コミ </a>";
        }
    }
    
    if($gounoura){
        $re=$dbh->query("SELECT * FROM kankou_spot WHERE machi LIKE '郷ノ浦町';");
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
            print "<a href='kankou_search.php'> 口コミ </a>";
        }
    }

    if($isida){
        $re=$dbh->query("SELECT * FROM kankou_spot WHERE machi LIKE '石田町';");
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

                print "<form method='POST' action='kankou_search.php'>
                       <input type='submit' value='口コミ'>
                       </form>
                      ";
        }
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