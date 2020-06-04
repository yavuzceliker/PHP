<?php
include "baglan.php";
if($_POST["btn"]=="Ekle")
{
	$soru=$_POST["soru"];
	$cevap1=$_POST["cevap1"];
	$cevap2=$_POST["cevap2"];
	$cevap3=$_POST["cevap3"];
	$cevap4=$_POST["cevap4"];
	$sql=mysql_query("insert into anket(soru,cevap1,cevap2,cevap3,cevap4) values ('$soru','$cevap1','$cevap2','$cevap3','$cevap4')");
		if($sql)
			echo "Anket Eklendi";
		else
			echo "Anket Eklenemedi";
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
Anket Sorusu: <br />
<textarea name="soru"></textarea><br /><br />

Cevap1: <br />
<input type="text" name="cevap1" /><br /><br />

Cevap2: <br />
<input type="text" name="cevap2" /><br /><br />

Cevap3: <br />
<input type="text" name="cevap3" /><br /><br />

Cevap4: <br />
<input type="text" name="cevap4" /><br /><br />
<input type="submit" name="btn" value="Ekle" />

</form>
</body>
</html>