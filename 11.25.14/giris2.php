<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GİRİŞ</title>
<?php

if(@$_POST["btn"]=="GİRİŞ")
{
	$kadi=$_POST["kadi"];
	$sifre=$_POST["sifre"];
	if($kadi=="" or $sifre=="")
	{
		echo"<script>alert('AMACIN NE BİLAAADEEER BOŞ MUSUN!!!!!!!!!!!');</script>";
	}
	else
	{
		if($kadi=="yavuzceliker" and $sifre=="yavuz123")
		{
			setcookie("oturumacildimi",1);
			setcookie("oturumacan",$kadi);
			header("location:profil.php");
		}
		else if($kadi=="cırcır" and $sifre=="bocuk")
		{
			setcookie("oturumacildimi",1);
			setcookie("oturumacan",$kadi);
			echo"<script>alert('CIIIRRR CIIIIIRRRRR!!!!!!!!!!!');</script>";
			header("location:profil.php");
		}		
	}
	
}
?>
</head>

<body>
<form action="" method="post">
<table border="10">
	<tr>
    	<th>GİRİŞ FORMU</th>
    </tr>
	<tr>
    	<td>KULLANICI ADI:</td>
        <td><input type="text" name="kadi" /></td>
    </tr>
	<tr>
    	<td>ŞİFRE ADI:</td>
        <td><input type="password" name="sifre" /></td>
    </tr>
	<tr>
    	<td></td>
        <td><input type="submit" name="btn" value="GİRİŞ"/></td>
    </tr>
</table>
</form>
</body>
</html>