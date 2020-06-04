<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GİRİŞ</title>

</head>

<body>
<form action="" method="post">
<?php
//header("refresh:0.2");
session_start();
if($_GET["secim"]=="cikis")
{
	session_destroy();
	echo"<script>alert('ÖYLE OLSUN BİLADER BIRAKIP GİTTİİN YA AYIP ETTİN UNUTMAM BU YAPTIĞINI :(');</script>";
	header("refresh:0.5;giris.php");
}
if($_SESSION["oturumacildimi"]!=1)
{
	echo"<script>alert('SEN KİMSİN. SEN HAÇKER MİSİN BİLADEEERRRR BURAYI TERKEETTT!!!!!!!!!!!');</script>";
	header("refresh:6;giris.php");
	echo"6sn. BEKLE ŞİMDİ AMELEEEE";
}
else
{
	echo"HOŞGELDİN".$_SESSION["oturumacan"];
}

?>
<br /><a href="profil.php?secim=cikis">ÇIKIŞ</a>
</form>
</body>
</html>