<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="logo"><img src="4eachblog_logo.jpg"></div>

<header>
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
</header>

<main>

<div class="left">
    <h1>プログラミングに役立つ掲示板</h1>
    <div>
    <form method="post" action="insert.php">
        <h2>入力フォーム</h2>
        <label>ハンドルネーム</label><br>
            <input type="text" class="text" size="35" name="handlename">
        </div>
       
        <div>
            <label>タイトル</label><br>
            <input type="text" class="text" size="35" name="title">
        </div>

        <div>
            <label>コメント</label><br>
            <textarea cols="35" rows="7" name="comments"></textarea>
        </div>

        <div>
            <input type="submit" class="submit" value="投稿する">
        </div>
    </form>

    <div class="box2">
    <h2>タイトル</h2>
    <script>
        for(var i=1; i<=12; i++){
            document.write("記事の中身。");
        }
        document.while("<br>");
        for(var i=1; i<=6; i++){
            document.write("記事の中身。");
        }
        document.while("<br>");
        for(var i=1; i<=6; i++){
            document.write("記事の中身。");
        }
    </script>
    powerd by 通りすがり
    </div>

    <div class="box2">
    <h2>タイトル</h2>
    <script>
        for(var i=1; i<=12; i++){
            document.write("記事の中身。");
        }
        document.while("<br>");
        for(var i=1; i<=6; i++){
            document.write("記事の中身。");
        }
        document.while("<br>");
        for(var i=1; i<=6; i++){
            document.write("記事の中身。");
        }
    </script>
    powerd by 通りすがり
    </div>

</div>        

<div class="right">
            <h2>人気の記事</h2>
            <ul class="menu2">
            <li>オススメ本</li>
            <li>MyAdminの使い方</li>
            <li>今人気のエディタ Top5</li>
            <li>HTMLの基礎</li>
            </ul>
            <h2>オススメリンク</h2>
            <ul class="menu2">
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>  
            </ul>
            <h2>カテゴリ</h2>
            <ul class="menu2">
           <li>HTML</li>         
           <li>PHP</li> 
           <li>MySQL</li> 
           <li>JavaScript</li> 
           </ul>
</div>
</main>

<footer>
    copyright © internous | 4each blog the witchprovides A to Z about programing.
</footer>
    
</body>
</html>
