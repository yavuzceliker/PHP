<meta charset="utf-8" />
<style>
*{margin:0 auto; padding:0;}
</style>
<?php
	include "baglan.php";
	$sorgu=mysql_query("select * from kullanici where uye_adi like'%A'");
	echo"<div style='width:500px; height:auto;'>";
	while($satir=mysql_fetch_array($sorgu))
	{
		$renk=rand(100000,999999);
		
		echo"<div style=' border-radius:15; width:200px; height:120px; background:#$renk; float:left; margin:15 15 15 0; padding:15;'>";
		echo"Kullanıcı Adı=".$satir["uye_adi"];
		echo"<br>Şifre=".$satir["sifre"];
		echo"<br>E-Posta=".$satir["e_posta"];
		echo"<br>Üye Durumu=".$satir["durum"];
		echo"<br>Geçmiş Süre=".$satir["gecmis_sure"];
		echo"<br>Üyelik Tarihi=".$satir["uyelik_tarihi"];
		echo"</div>";
	}
	echo"</div>";
?>