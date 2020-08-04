<!DOCTYPE HTML>
<html lang ="ja">

<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
    
<body>
    
<?php
    mb_internal_encoding("utf8");
    
    require "DB.php";
    $dbconnect = new DB();
    $pdo = $dbconnect->connect();
    $stmt = $pdo->prepare($dbconnect->select());
    $stmt-> execute();
?>

    <img class="logo" src="4each_logo.jpg">

    <header>
        <a href="" >トップ</a>
        <a href="" >プロフィール</a>
        <a href="" >4eachについて</a>
        <a href="" >登録フォーム</a>
        <a href="" >問い合わせ</a>
        <a href="" >その他</a>
    </header>
    
    
    <main_left>
        <h2>プログラミングに役立つ掲示板</h2>
    
        <div class="contents">
            <h3 class="entry_title">入力フォーム</h3>
        
            <form method="post" action="insert.php">
            
                <div class="input">
                    <label>ハンドルネーム</label>
                    <input type="text" name="handlename" size="35">
                </div>
            
                <div class="input">
                    <label>タイトル</label>
                    <input type="text" name="title" size="35">
                </div>
            
                <div class="input">
                <label>コメント</label>
                <textarea rows="6" cols="50" name="comments" ></textarea>
                </div>

                <input class="submit" type="submit" value="投稿する">

            </form>
            
        </div >
        
        <?php
        while ($row = $stmt -> fetch()){   
        
            echo "<div class='contents' >";
            echo "<h3>".$row['title']."</h3>";
            echo "<div>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
            echo "</div>";            
            echo "</div>";
        } 
        ?>
        
    </main_left>
    
    
    <main_right>
        <div>
            <h3 class="right_title3">人気の記事</h3>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP　Myadminの使い方</li>
                <li>今人気のエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>
        </div>
        
        <div>
            <h3 class="right_title2">オススメリンク</h3>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Braketsのダウンロード</li>
            </ul>
        </div>
        
        <div>
            <h3 class="right_title3">カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
        
    
    </main_right>
    
    <footer>
        <p>copyright internous | 4eacg blog is the one which provides A to Z about programming.</p>
    </footer>
        
        
    


    
</body>