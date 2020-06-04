<?php
if(@$_POST["btn"]== "kontrolet")
{
	$kuladi=$_POST["adi"];
	$sifre=$_POST["sifre"];
	$desenkuladi="[a-zA-Z]{2,20}";
	$desensifre="[0-9]{3,8}";
	if(@ereg($desenkuladi,$kuladi))
	echo"Giris OK"; Else echo"kullanici adı hatalı";
	/*
	if(preg_match($desenkuladi,$kuladi))
	echo"Giris OK"; Else echo"kullanici adı hatalı";
	*/
	
	if(@ereg($desensifre,$sifre))
	echo"Sifre OK"; Else echo"sifre hatalı";
	
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
Kullanıcı Adi:<input type="text" name="adi" /><br />
Pasword:<input type="password" name="sifre" /><br />
 <input type="submit" value="kontrolet" name="btn"/>
</form>
</body>

</html>