<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table border="10">
<tr>
<td>ad</td><td>soyad</td>
<?php
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$adi=array($ad,$soyad);
foreach($adi as $i)
echo"<tr><td>$i[0]</td><td>$adi[1]</td></tr>";
?>
</tr>
</table>
<form name="form" action="" method="post">
AD:<input name="ad" type="text" /><br />
SOYAD:<input name="soyad" type="text" /><br />
<input type="submit" value="yolla"/>
</form>
</body>
</html>