<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
<?php
$adi=$_POST["adi"];
$soyad=$_POST["soyad"];
$sifre=$_POST["sifre"];
$cins=$_POST["cins"];
$renk=$_POST["renk"];
$mail=$_POST["email"];
$hobi=$_POST["hobi"];
$dogyer=$_POST["dogyer"];
$ugras=$_POST["ugras"];
$btn=$_POST["btn"];
echo"ADINIZ:$adi<br>
	 SOYADINIZ: $soyad<br>
	 ŞİFRENİZ: $sifre<br>
	 CİNSİYETİNİZ: $cins<br>
	 RENGİNİZ:<b  style='color:$renk'>IIIIIIIIIII</b><br>
	 E-Mail: $mail<br>
	 HOBİLERİNİZ: $hobi<br>
	 DOĞUM YERİNİZ: $dogyer<br>
	 UĞRAŞ SONUCU: $ugras<br>";
?>
</body>
</html>