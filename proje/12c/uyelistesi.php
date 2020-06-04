<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Üye Listesi</title>
</head>
<body>
<?php
include "baglan.php";
$sorgu=mysql_query("select * from uyeler");
while($satir=mysql_fetch_array($sorgu))
{
echo "Kullanıcı Adı:".$satir["kullaniciadi"];
echo "<br>Şifre:".$satir["sifre"];
echo "<br>Epostası:".$satir["eposta"];
echo "<br>Doğum Yeri:".$satir["dogumyeri"];
echo "<br>Cinsiyet:".$satir["cinsiyet"];
echo "<br>Adres:".$satir["adres"];
echo "<hr>";
}


?>




</body>
</html>