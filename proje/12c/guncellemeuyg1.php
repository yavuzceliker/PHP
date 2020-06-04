<?php
if($_POST["btn"]=="Değiştir")
{
include "baglan.php";	
$eski=$_POST["eski"];
$yeni=$_POST["yeni"];
$sql=mysql_query("update uyeler set dogumyeri='$yeni' where dogumyeri='$eski'");
if($sql) echo "Değiştirildi"; else echo "Hata Olmadı ki";
	
}



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>Doğum Yeri Eski
    <label for="eski"></label>
  <input type="text" name="eski" id="eski" />
  </p>
  <p>Doğum YeriYeni 
    <label for="yeni"></label>
    <input type="text" name="yeni" id="yeni" />
  </p>
  <p>
    <input type="submit" name="btn" id="btn" value="Değiştir" />
  </p>
</form>
</body>
</html>