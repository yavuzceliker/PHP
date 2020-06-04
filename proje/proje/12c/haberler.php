<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#kutu{
	width:44%;
	height:250px;
	background:#996;
	margin:10px;
	padding:10px;
	float:left;
	border-radius:20px;
	box-shadow: 10px 10px 5px #888888;
}

#kutu:hover
{
	opacity:0.7;
}
#resim{
	width:100px;
	height:100px;
	margin-right:15px;
}


#sayfalama{
	width:800px;
	height:30px;
	margin:0 auto;
}
#numara{
	width:20px;
	height:30px;
	margin:5px;
	padding:5px;
	float:left;
	background:#9C6;
	font-size:30px;
	
	
}

#numara a{
	text-decoration:none;
	color:#fff;
}
#numara:hover{
	background:#F00;
}

</style>


</head>

<body>
<?php
include "baglan.php";
$kacadet=2;
@$sayfa=$_GET["sayfa"];
if(empty($sayfa)) $sayfa=1;
$baslangic=($sayfa-1)*$kacadet;

$sql=mysql_query("select * from haberler limit $baslangic,$kacadet");

while($satir=mysql_fetch_array($sql))
{
	echo "<div id='kutu'>";
	echo "<center><h3>".$satir["baslik"]."</h3></center>";
	echo "<p><img id='resim' align='left' src=resimler/".$satir["resim"].">";
	echo substr($satir["icerik"],0,200)."....</p>";
	
	echo "<p><a href=haberoku.php?haberid=".$satir["id"].">Devamını Oku</a></p>";
	
	echo "Kategori:".$satir["kategori"];
	echo " Tarih:".$satir["tarih"];
	echo "</div>";
}

$sql=mysql_query("select * from haberler");
$kayitsayisi=mysql_num_rows($sql);
$sayfasayisi=ceil($kayitsayisi/$kacadet);
echo "<div id='sayfalama'>";
for($i=1;$i<=$sayfasayisi;$i++)
{
echo "<div id='numara'><a href=haberler.php?sayfa=".$i.">".$i."</a></div>";	
}
echo "</div>";

?>


</body>
</html>