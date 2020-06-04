<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#kutu{
	width:90%;
	
	background:#996;
	margin:10px;
	padding:10px;
	
	border-radius:20px;
	box-shadow: 10px 10px 5px #888888;
}

#kutu:hover
{
	opacity:0.7;
}
#resim{
	width:300px;
	margin-right:15px;
}


</style>




</head>

<body>
<?php
include "baglan.php";
$haberid=$_GET["haberid"];
if(empty($haberid)) $haberid=1;
$sql=mysql_query("select * from haberler where id=$haberid");
while($satir=mysql_fetch_array($sql))
{
	echo "<div id='kutu'>";
	echo "<center><h3>".$satir["baslik"]."</h3></center>";
	echo "<p><img id='resim' align='left' src=resimler/".$satir["resim"].">";
	echo $satir["icerik"]."....</p>";
			
	echo "Kategori:".$satir["kategori"];
	echo " Tarih:".$satir["tarih"];
	echo "</div>";
}

?>



</body>
</html>