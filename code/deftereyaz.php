<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Deftere Yaz</title>
</head>
<style>
*{margin:0 auto; padding:0;}
input,textarea{width:98%;}
</style>
<body>
	<form action="" method="post">
    	<table border="10">
        	<tr>
            	<td colspan="2"><h1><b>ZİYARETÇİ DEFTERİ</b></h1></td>
            </tr>
            <tr>
            	<td>Adınız Soyadınız</td>
            	<td><input type="text" name="adsoyad"/></td>
            </tr>
        	<tr>
            	<td>E-Mail Adresiniz</td>
            	<td><input type="email" name="mail"/></td>
            </tr>
        	<tr>
            	<td>Başlık</td>
            	<td><input type="text" name="baslik"/></td>
            </tr>
        	<tr>
            	<td>Mesaj</td>
            	<td><textarea name="mesaj"></textarea></td>
            </tr>
        	<tr>
            	<td colspan="2" style="text-align:center;"><input style="color:#F00; background-color:#30F;" type="submit" name="btn" value="GONDER"/></td>
            </tr>
        </table>
    </form>
<?php
include("baglan.php");
if(@$_POST["btn"]=="GONDER")
{
	$ad=$_POST["adsoyad"];
	$mail=$_POST["mail"];
	$baslik=$_POST["baslik"];
	$mesaj=$_POST["mesaj"];
	$tarih=date("d-m-Y");
	$ekle=mysql_query("insert into ziyaretci(adsoyad,email,baslik,mesaj,tarih) values('$ad','$mail','$baslik','$mesaj','$tarih')");
}
if($ekle)
echo"<script>alert('Kayıt Başarılı!');</script>";
else
echo"<script>alert('HATA!');</script>";
?>
</body>
</html>