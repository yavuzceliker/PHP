<?php
include "baglan.php";
if($_POST["btn"]=="Oyla")
{
	
$secim=$_POST["secim"];
$sql=mysql_query("update anket set $secim=$secim+1 where durum=1");
if($sql)
echo "Oyunuz alındı";
else
echo "oy alınmadı";
	
}

?>
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

?>
<form method="post" action="">
<?php echo $satir["soru"]; ?><br /><br />

<input type="radio" name="secim" value="oy1" />
<?php echo $satir["cevap1"]; ?><br />

<input type="radio" name="secim" value="oy2" />
<?php echo $satir["cevap2"]; ?><br />

<input type="radio" name="secim" value="oy3" />
<?php echo $satir["cevap3"]; ?><br />

<input type="radio" name="secim" value="oy4" />
<?php echo $satir["cevap4"]; ?><br />

<input type="submit" name="btn" value="Oyla" />
</form>

</body>
</html>