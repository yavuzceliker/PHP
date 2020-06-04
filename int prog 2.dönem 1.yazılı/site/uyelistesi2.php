<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Üye Listesi</title>
<style>
#kutu{
	width:40%;
	height:250px;
	margin:30px;
	padding:10px;
	float:left;
	border-radius:30px;
	background:#CCC;
	font-size:25px;
	
	
}

</style>



</head>
<body>
<?php
include "baglan.php";
$sorgu=mysql_query("select * from uyeler where sifre like '_' or sifre like '__' or sifre like '___' ");


while($satir=mysql_fetch_array($sorgu))
{
echo "<div id='kutu'>";
	echo "Kullanıcı Adı:".$satir["kullaniciadi"];
	echo "<br>Şifre:".$satir["sifre"];
	echo "<br>Epostası:".$satir["eposta"];
	echo "<br>Doğum Yeri:".$satir["dogumyeri"];
	echo "<br>Cinsiyet:".$satir["cinsiyet"];
	echo "<br>Adres:".$satir["adres"];
echo "</div>";
}


?>




</body>
</html>