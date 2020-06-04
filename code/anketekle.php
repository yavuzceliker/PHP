<?php
include "baglan.php";
if(@$_POST["btn"]=="Ekle")
{
	$soru=$_POST["soru"];
	$t1=$_POST["cvp1"];
	$t2=$_POST["cvp2"];
	$t3=$_POST["cvp3"];
	$t4=$_POST["cvp4"];
	
	$ekle=mysql_query("insert into anket(soru,cevap1,cevap2,cevap3,cevap4,durum)values('$soru','$t1','$t2','$t3','$t4',0)");
	if($ekle)
	{
		echo "ekleme başarılı";
	}
	else
	{
		echo "ekleme başarısız";
	}

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="">
<table>
<tr><td>Soru:</td><td><input type="text" name="soru" /></td></tr>
<tr><td>Cevap1:</td><td><input type="text" name="cvp1"  /></td></tr>
<tr><td>Cevap2:</td><td><input type="text" name="cvp2"  /></td></tr>
<tr><td>Cevap3:</td><td><input type="text" name="cvp3"  /></td></tr>
<tr><td>Cevap4:</td><td><input type="text" name="cvp4"  /></td></tr>
<tr><td><input type="submit" value="Ekle" name="btn" /></td></tr>
</table>
</form>
</body>
</html>