<?php
session_start();
if($_POST["btn"]=="GİRİŞ")
{
include "baglan.php";
$kuladi=$_POST["kuladi"]	;
$sifre=$_POST["sifre"]	;
$sql=mysql_query("select * from uyeler where kullaniciadi='$kuladi' and sifre='$sifre'");
//mysql_num_rows: sql sonucunda çekilen kayıt sayını verir
$adet=mysql_num_rows($sql);
	if($adet>=1)
	{
		$_SESSION["oturumacan"]=$kuladi;
		$_SESSION["durum"]=1;
		header("Location:profil.php");
	}
	else
	{
	echo "<script>alert('Hatalı Giriş Yeniden Dene');</script>";	
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Üye Girişi</title>
<style>
#giris{
	width:500px;
	height:250px;
	margin:0 auto;
	padding:20px;
	margin-top:30px;
	border-radius:30px;
	background:#999;
	color:#FFF;
	font-size:24px;
}

input[type="text"],input[type="submit"],input[type="reset"],input[type="password"],textarea,select
{
	border:groove 3px #0000CC;
	border-radius:5px;
	font:Georgia, "Times New Roman", Times, serif;
	padding:3px;
}

input[type="submit"],input[type="reset"]{
	background:#900;
	opacity:0.7;
}
input[type="submit"]:hover,input[type="reset"]:hover{
	border:groove 3px #900;
	background:#0000CC;
	opacity:1;
}



</style>
</head>


<body>
<div id="giris">
<form action="" method="post">
<table width="479"  border="0" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td height="54" colspan="2" align="center" valign="top">ÜYE GİRİŞ FORMU</td>
  </tr>
  <tr>
    <td width="210">Kullanıcı Adı</td>
    <td width="182"><label for="kuladi"></label>
      <input type="text" name="kuladi" id="kuladi" /></td>
  </tr>
  <tr>
    <td>Şifre</td>
    <td><label for="sifre"></label>
      <input type="password" name="sifre" id="sifre" /></td>
  </tr>
  <tr>
    <td><a href="sifrehatirlat.php">Şifremi Unuttum</a></td>
    <td><input type="submit" name="btn" id="btn" value="GİRİŞ" /></td>
  </tr>
</table>
</form>
</div>
</body>
</html>