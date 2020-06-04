<meta charset="utf-8" />
<style>
*{margin:0 auto; padding:0;}
</style>
<?php
	include "baglan.php";
	$sorgu=mysql_query("select * from ziyaretci");
	echo"<div style='width:1000px; height:auto;'>";
	while($satir=mysql_fetch_array($sorgu))
	{
		$renk=rand(100000,999999);
		
		echo"<div style='border-radius:25px; width:260px; height:250px; background:#$renk; float:left; margin:15 15 15 0; padding:15;'>";
		echo"<br><h2 style='text-align:center;'>".$satir["baslik"]."</h2><br><br>";
		echo"ADI SOYADI=".$satir["adsoyad"]."<br>";
		echo"<br>MAİL=".$satir["email"]."<br>";
		
		echo"<br>mesaj=".$satir["mesaj"]."<br>";
		echo"<br>tarih=".$satir["tarih"]."<br>";
		echo"</div>";
	}
	echo"</div>";
?>