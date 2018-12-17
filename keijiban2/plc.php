<!DOGTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog課題</title>
<link rel="stylesheet" href="god.css" type="text/css">
<img src="slide1.jpg" width="100%" height="500">
</head>
  
    
<body>
    
<?php
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=keijiban02;host=localhost;","root","mysql");
$stmt=$pdo->query("select * from fsgame");
?>

<header>
    
<div class="menew"></div>
     
<ul>
<li>メニュー</li>     
<li>プロフィール</li>
<li>画像</li>  
<li>相互リンク</li>  
<li>問い合わせ</li>  
<li>管理人からのメッセージ</li>  
</ul>
</header>
 
<main>
    
<div class="hajimeni">
<div class="lh">
<h1>閲覧ありがとうございます！</h1>
<form method="post" action="plc02.php" >
<div>
<h2>応援</h2>

<label>ＨＮ</label>
<br>
<input type ="text" class="pi" size="50" name="hn">
<br>
<label>見出し</label>
<br>
<input type ="text" class="pi" size="50" name="md">
<br>
<label>メッセージ</label>
<br>
<textarea  class="pi" cols="50"  rows="5" name="ms"></textarea>
<div>
<input type="submit" class="pi" value="気合を入れて押せ！！">
</div>
    
</div>

</form>


<div class="cm">
<?php
while($row=$stmt->fetch()){
echo "<div class='kiji'>";
echo "<h3>".$row ["md"]."</h3>";
echo "<div class='contents'>";
echo $row ["ms"];
echo "<div class='handlename'>posted by".$row ["hn"]."</div>";
echo "</div>";
echo "</div>";
}

?>
</div>  
</div>
</div>
<div class = "rh">
<h2>ハイライト</h2>
今流行りの○○！
<br>
勝つために必要な３つのテクニック！
<h2>マップ一覧</h2>
マップと勝率
<br>
鉄板構成
<h2>特性と対策</h2>
特性
<br>
対策
<br>
共通点
</div>
</main>

    
    <footer>
F.S inc. 2018/12/20
</footer>
</body>

</html>