<?php
if(@$_POST["btn"]=="degistir")
{
	$mtn=$_POST["mtn"];
	$mtn1=$_POST["mtn1"];
	$ilkdeger=$_POST["a"];
	$sondeger=$_POST["b"];
	$dmetin=@ereg_replace($ilkdeger,$sondeger,$mtn);
	echo"Yeni=$dmetin";
	/*
	([0-9A-Za-z.-_]+@[a-zA-Z0-9]+.[a-z0-9A-Z]{2,4}) mail deseni
	<s>\1</s> degisken alma komutu
	
	web adresi kodu 
	([a-zA-Z0-9]+.[a-zA-Z0-9]{2,3})
	
	(http://www.+[a-zA-Z0-9]+.[a-zA-Z0-9]{2,3})
	
	
	<a href="\1" target="_blank">tıkla</a>
	*/
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
<textarea name="mtn"></textarea>  <textarea name="mtn1"><?php echo " $dmetin "; ?></textarea><br />
Aranan İfade<br />
<input type="text" name="a" /><br />
Yeni Deger<br />
<input type="text" name="b" /><br />
<input type="submit" name="btn" value="degistir" />
	
</form>
</body>
</html>