<!doctype HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>お問合わせフォームを作る</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<h1>お問合わせ内容確認</h1>
<div class="confirm">
<p>お問い合わせ内容はこちらで宜しいでしょうか?
<br> よろしければ「送信する」ボタンを押して下さい。
</p>
<p>ＨＮ
<br>
<?php echo $_POST['hn']; ?>
</p>
<p>見出し
<br>
<?php echo $_POST['md']; ?>
</p>
<p>メッセージ
<br>
<?php echo $_POST['ms']; ?>
</p>
<form action="plc.html">
<input type="submit" class="button1" value="戻って修正する" />
</form>
<form action="plc.php" method="post">
<input type="submit" class="button2" value="登録する" />
<input type="hidden" value="<?php echo $_POST['hn']; ?>" name="pi">
<input type="hidden" value="<?php echo $_POST['md']; ?>" name="pi">
<input type="hidden" value="<?php echo $_POST['ms']; ?>" name="pi">
</form>
</div>
</body>
</html>