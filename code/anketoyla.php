<?php
include "baglan.php";
if($_POST["btn"]=="Oyla")
{
	$secim=$_POST["secim"];
	$ekle=mysql_query("Update anket set $secim=$secim+1");
	if($ekle)
	echo "<script>alert('oylama işlemi başarılı');</script>";
    else
	echo "<script>alert('oylama işlemi başarısız');</script>";
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
$sql=mysql_query("select * from anket where durum=1");
$satir=mysql_fetch_array($sql);
?>
<form method="post" action="">
<table>
<tr><td><?php echo $satir["soru"];?>
<tr><td><input type="radio" name="secim" value="oy1" /></td><td><?php echo $satir["cevap1"];?></td></tr>
<tr><td><input type="radio" name="secim" value="oy2" /></td><td><?php echo $satir["cevap2"];?></td></tr>
<tr><td><input type="radio" name="secim" value="oy3" /></td><td><?php echo $satir["cevap3"];?></td></tr>
<tr><td><input type="radio" name="secim" value="oy4" /></td><td><?php echo $satir["cevap4"];?></td></tr>
<tr><td><input type="submit" name="btn" value="Oyla" /></td></tr>
</table>
</form>
</body>
</html>