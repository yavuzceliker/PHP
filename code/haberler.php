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
</style>
<body>
<?php
include "baglan.php";
$sql=mysql_query("select * from haberler");
while($satir=mysql_fetch_array($sql))
{
	echo "<div id='kutu'>";
	echo "<center><h3>".$satir["baslik"]."</h3></center>";
	echo "<p><img id='resim' align='left' src=resimler/".$satir["resim"].">";
	echo $satir["icerik"]."</p>";
	echo "Kategori:".$satir["kategori"];
	echo "</div>";
}
?>
</body>
</html>