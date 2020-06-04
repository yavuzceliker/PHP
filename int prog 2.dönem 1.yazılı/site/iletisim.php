<?php
if($_POST["btn"]=="Gönder")
{
include "baglan.php";
$gonderen=$_POST["gonderen"]	;
$baslik=$_POST["baslik"];
$mesaj=$_POST["mesaj"];

$tarih=date("d-m-Y");
/*
insert into tabloadı(tablodaki kayıt eklenecek alan1, alan2, alan3 ,....)values ("eklenecek deger1, değer2, değer3,....)
*/

$ekle=mysql_query("insert into uyeler(kullaniciadi,eposta,sifre,dogumyeri,cinsiyet,adres)values ('$kullaniciadi','$eposta','$sifre','$dogumyeri','$cinsiyet','$adres')");
if($ekle) 
echo "kayıt eklendi";
else 
echo "Kayıt Eklenemedi";
	
	


}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="" method="get">
<table width="351" border="0">
  <tr>
    <td colspan="2" align="center" valign="middle">İLETİŞİM FORMU</td>
    </tr>
  <tr>
    <td>Gönderen Ad Soyad</td>
    <td><label for="gonderen"></label>
      <input type="text" name="gonderen" id="gonderen" /></td>
  </tr>
  <tr>
    <td>Başlık</td>
    <td><label for="baslik"></label>
      <input type="text" name="baslik" id="baslik" /></td>
  </tr>
  <tr>
    <td>Mesaj</td>
    <td><label for="mesaj"></label>
      <textarea name="mesaj" id="mesaj" cols="21" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btn" id="btn" value="Gönder" /></td>
  </tr>
</table>


</form>
</body>
</html>