<meta charset="utf-8" />
<?php
include("baglan.php");
$kod=mysql_query("select * from ziyaretci limit 0,3");
echo"<div style='width:500px; height:auto;'>";
	while($satir=mysql_fetch_array($kod))
	{
		$renk=rand(100000,999999);
		
		echo"<div style=' border-radius:15; width:200px; height:100px; background:#$renk; float:left; margin:15 15 15 0; padding:15;'>";
		echo"Kullanıcı Adı=".$satir["adsoyad"];
		echo"<br>Şifre=".$satir["email"];
		echo"<br>E-Posta=".$satir["baslik"];
		echo"<br>Üye Durumu=".$satir["mesaj"];
		echo"<br>Geçmiş Süre=".$satir["tarih"];
		echo"</div>";
	}
	echo"</div>";
?>
