<?php
session_start();
//A-oturum kontrol başlangıcı: oturum açılmamışsa kullnıcıyı giris php sayfsına yönlendiriyoruz.
if($_SESSION["durum"]!=1)
{
	echo "<script>alert('Bu sayfa Üyelere Özeldir.  Giriş yapta gel');</script>";
	header("Location:giris.php");
}
//A-oturum kontrolü sonu

//oturum açan kullanıcı bilgilerini veritabanından çekip satir isimli dizi değişkene aktarıyoruz.
include "baglan.php";
$oturumacan=$_SESSION["oturumacan"];
$sql=mysql_query("select * from uyeler where kullaniciadi='$oturumacan'");
$satir=mysql_fetch_array($sql);
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profil</title>
</head>

<body>
<form method="post" action="">
<table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td width="84" rowspan="4" bgcolor="#CC9933">&nbsp;</td>
    <td width="122" bgcolor="#CC9933">Kullanıcı Adı</td>
    <td width="144" bgcolor="#CC9933"><label for="kuladi"></label>
      <input name="kuladi" type="text" id="kuladi" value="<?php echo $satir["kullaniciadi"]; ?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#CC9933">Şifre</td>
    <td bgcolor="#CC9933"><label for="sifre"></label>
      <input name="sifre" type="text" id="sifre" value="<?php echo $satir["sifre"]; ?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#CC9933">Eposta</td>
    <td bgcolor="#CC9933"><label for="eposta"></label>
      <input name="eposta" type="text" id="eposta" value="<?php echo $satir["eposta"]; ?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#CC9933">Adres</td>
    <td bgcolor="#CC9933"><label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="21" rows="5"><?php echo $satir["adres"]; ?></textarea></td>
  </tr>
  <tr>
    <td width="84" bgcolor="#CC9933"><input type="submit" name="btn2" id="btn2" value="Resim Değiştir" /></td>
    <td bgcolor="#CC9933">&nbsp;</td>
    <td bgcolor="#CC9933"><input type="submit" name="btn" id="btn" value="Değiştir" /></td>
  </tr>
</table>
</form>
</body>
</html>