<?php
     
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=keijiban02;host=localhost;" ,"root" ,"mysql");

$pdo->exec("insert into fsgame(hn,md,ms)values('".$_POST['hn']."','".$_POST['md']."','".$_POST['ms']."');");

header("location:http://localhost/plc.php");
?>