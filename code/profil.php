<?php
session_start();
if($_SESSION["durum"]!=1)
{
	echo "<script>alert('Uyelere ozel giriş yap');</script>";
	header("Location:giris.php");
}
include "baglan.php";
$oturumacan=$_SESSION["oturumacan"];
$sql=mysql_query("select * from uyeler where kullaniciadi='$oturumacan'");
$satir=mysql_fetch_array($sql);

//oturum acan kullanıcı bilgilerini veritabanından cekip satır isimli dizi değişkene aktarıyoruz.

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table border="1" bgcolor="#66FFFF";>
<tr><td><img src="../../../Users/Public/Pictures/Sample Pictures/Koala.jpg" width="100" height="84" /></td><td><input type="submit" value="Resmi Değiştir" name="rd" /></td></tr>
<tr><td>Kullanici Adi:</td><td><input name="kuladi" type="text" value="<?php echo $satir["kullaniciadi"];?>" /></td>
<tr><td>Şifre</td><td><input name="sifre" type="text" value="<?php echo $satir["sifre"];?>" /></td></tr>
<tr><td>E-posta</td><td><input type="text" value="<?php echo $satir["eposta"];?>" /></td></tr>
<tr><td>Doğum Yeri:</td><td><input name="dogumyeri" type="text" value="<?php echo $satir["dogumyeri"];?>" /></td></tr>
<tr><td><input type="submit" value="değiştir" /></td></tr>
</table>
</body>
</html>