<meta charset="utf-8" />
<style>
*{margin:0 auto; padding:0;}
</style>
<?php
	include "baglan.php";
	$sorgu=mysql_query("select * from ziyaretci where adsoyad like'%a%'");
	echo"<div style='width:500px; height:auto;'>";
	while($satir=mysql_fetch_array($sorgu))
	{
		$renk=rand(100000,999999);
		
		echo"<div style=' border-radius:15; width:200px; height:120px; background:#$renk; float:left; margin:15 15 15 0; padding:15;'>";
		echo"Kullanıcı Adı=".$satir["adsoyad"];
		echo"</div>";
	}
	echo"</div>";
?>