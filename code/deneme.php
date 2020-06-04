<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
#kutu{
	width:40%;
	height:200px;
	background:#966;
	margin:10px;
	padding:10px;
	float:left;
}

#resim{
	width:100px;
	height:100px;
	margin-right:5px;
}
#sayfalama{
	width:800px;
	height:35px;
	margin:0 auto;
}
#numara{
	width:30px;
	height:30px;
	margin:5px;
	padding:5px;
	float:left;
	background:#9C6;
	font-size:24px;
}
</style>
<body>
<?php
include "baglan.php";
$kacadet=2;
$sayfa=$_GET["sayfa"];
if(empty($sayfa))$sayfa=1;
$baslangic=($sayfa-1)*$kacadet;
$sql=mysql_query("select * from haberler limit $baslangic,$kacadet");
while($satir=mysql_fetch_array($sql))
{
	echo "<div id='kutu'>";
	echo "<center><h3>".$satir["baslik"]."</h3></center>";
	echo "<p><img id='resim' align='left' src=resimler/".$satir["resim"].">";
	echo $satir["icerik"]."</p>";
	echo "Kategori:".$satir["kategori"];
	echo "</div>";
}
$sql=mysql_query("select * from haberler");
$katsayisi=mysql_num_rows($sql);
$sayfasayisisi=ceil($katsayisi/$kacadet);
echo "<div id='sayfalama'>";
for($i=1;$i<=$sayfasayisisi;$i++)
{
	echo "<div id='numara'><a href=deneme.php?sayfa=".$i.">".$i."-</a>";
}
	echo "</div>";
?>
</body>
</html>