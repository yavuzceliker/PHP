<?php
if(@$_POST["btn"]=="Deftere Yaz")
{
	include "baglan.php";
	$adsoyad=$_POST["adsoyad"];
	$email=$_POST["email"];
	$baslik=$_POST["baslik"];
	$mesaj=$_POST["mesaj"];
	$tarih=date("d-m-Y");
	$sql=mysql_query("insert into ziyaretci(adsoyad,email,baslik,mesaj,tarih)values ('$adsoyad','$email','$baslik','$mesaj','$tarih')");
	
	if($sql)
	echo "kayıt eklendi";
	else
	echo "kayıt eklenemedi";
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ziyaretçi Defteri</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
    <tr>
      <td colspan="2" align="center"><strong>ZİYARETÇİ DEFTERİ</strong></td>
    </tr>
    <tr>
      <td><strong>Ad Soyad</strong></td>
      <td><label for="adsoyad"></label>
      <input type="text" name="adsoyad" id="adsoyad" /></td>
    </tr>
    <tr>
      <td><strong>E-Mail</strong></td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <td><strong>Başlık</strong></td>
      <td><label for="baslik"></label>
      <input type="text" name="baslik" id="baslik" /></td>
    </tr>
    <tr>
      <td><strong>Mesaj</strong></td>
      <td><label for="mesaj"></label>
      <textarea name="mesaj" id="mesaj" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btn" id="btn" value="Deftere Yaz" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>