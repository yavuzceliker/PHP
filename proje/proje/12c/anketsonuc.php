<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include "baglan.php";
$sql=mysql_query("select * from anket where durum=1");
$satir=mysql_fetch_array($sql);
$toplamoy=$satir["oy1"]+$satir["oy2"]+$satir["oy3"]+$satir["oy4"];
$yuzde1=(100*$satir["oy1"])/$toplamoy;
$yuzde2=(100*$satir["oy2"])/$toplamoy;
$yuzde3=(100*$satir["oy3"])/$toplamoy;
$yuzde4=(100*$satir["oy4"])/$toplamoy;
echo "Soru".$satir["soru"]."<br>";

echo "<hr align='left' size='20' width='".$yuzde1."%'>".$satir["oy1"]."-".$yuzde1;


?>





</body>
</html>