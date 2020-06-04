<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Uyeler</title>
</head>
<style>
#kutu{
	background-color:#3FF;
	width::300px;
	height:200px;
	margin:20px;
	padding:10px;
	float:left;
	border-radius:30px;
}
</style>
<body>
<?php
include "baglan.php";
$sorgu=mysql_query("select * from uyeler");
while($satir=mysql_fetch_array($sorgu))
{
echo "<div id='kutu'>";
echo "Adı:".$satir["ad"];
echo "<br>Soyadı:".$satir["soyad"];
echo "<br>E-Posta:".$satir["eposta"];
echo "<br>Şifre:".$satir["sifre"];
echo "<br>Doğum yeri:".$satir["dogumyeri"];
echo "</div>";
}
?>
</body>
</html>