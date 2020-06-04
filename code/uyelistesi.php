<?php
include "baglan.php";
$silinecek=$_GET["silinecek"];
$sql=mysql_query("delete from uyeler where id='$silinecek'");
if($sql)
echo "silindi";
else
echo "silinmedi";
?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Uyeler</title>
</head>
<body>

<?php

include "baglan.php";
$sorgu=mysql_query("select * from uyeler");
while($satir=mysql_fetch_array($sorgu))
{

echo "Kullanıcı Adı:".$satir["kullaniciadi"];
echo "<br>Adı:".$satir["ad"];
echo "<br>Soyadı:".$satir["soyad"];
echo "<br>E-Posta:".$satir["eposta"];
echo "<br>Şifre:".$satir["sifre"];
echo "<br>Doğum yeri:".$satir["dogumyeri"];
echo "<br>Resim:".$satir["resim"];
echo "<br><a href=?silinecek=".$satir["id"].">Sil</a>";
echo "<hr>";
}
?>
</body>
</html>