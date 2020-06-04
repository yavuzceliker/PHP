<?php
if($_POST["btn"]=="Gönder")
{
include "baglan.php";
$gonderen=$_POST["gonderen"]	;
$baslik=$_POST["baslik"];
$mesaj=$_POST["mesaj"];
$tarih=date("d-m-Y");

$ekle=mysql_query("insert into iletisim(gonderen,baslik,mesaj,tarih)values ('$gonderen','$baslik','$mesaj','$tarih')");
if($ekle) echo "eklendi"; else echo "hata";


	
	
}



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Üye Kayıt Formu</title>
<link rel="stylesheet" type="text/css" href="satyle.css"/>
</head>

<body>
<div id="kayitform">
<form action="" method="post">
<table width="100%" border="0" align="center">
  <tr>
    <td colspan="2" align="center" valign="middle">İLETİŞİM FORMU</td>
    </tr>
  <tr>
    <td>Gönderen</td>
    <td><label for="kullaniciadi"></label>
      <input type="text" name="kullaniciadi" id="kullaniciadi" /></td>
  </tr>
  <tr>
    <td>Başlık</td>
    <td><label for="baslik"></label>
      <input type="text" name="baslik" id="baslik" />      <label for="cinsiyet"></label></td>
  </tr>
  <tr>
    <td>Mesaj</td>
    <td><label for="adres"></label>
      <textarea name="adres" id="adres" cols="30" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><input type="submit" name="btn" id="btn" value="Gönder" /></td>
  </tr>
</table>
</form>
</div>
</body>
</html>