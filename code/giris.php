<?php
session_start();
if(@$_POST["btn"]=="Giriş");
{
	include "baglan.php";
	$kuladi=@$_POST["kuladi"];
	$sifre=@$_POST["sifre"];
	$sql=mysql_query("select * from uyeler  where kullaniciadi='$kuladi' and sifre='$sifre'");
	//çekilen kayıt adetini verir
	$adet=mysql_num_rows($sql);
	if($adet>=1)
	{
		$_SESSION["oturumacan"]=$kuladi;
		$_SESSION["durum"]=1;
		header("Location:profil.php");
	}
	else
	{
		echo "<script>alert('hatalı giriş yeniden deneyin');</script>";
	}
}







?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
Üye Giriş Formu<br />
<form action="" method="post">
Kullanıdı Adı:<input type="text" name="kuladi" />
<br />Şifre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="sifre" />
<br /><a>Şifremi Unuttum</a> <input type="submit" name="btn" value="Giriş" />
</form>
</body>
</html>