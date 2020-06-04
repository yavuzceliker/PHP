<?php
include "baglan.php";
if($_POST["btn"]=="Göster")
{
	$kuladi=$_POST["kuladi"];
	$sql=mysql_query("select * from uyeler where kullaniciadi='$kuladi'");
	$satir=mysql_fetch_array($sql);
}
if($_POST["btn2"]=="Güncelleştir")
{
	$kuladi=$_POST["kuladi"];
	$eposta=$_POST["ad"];
	$sifre=$_POST["soyad"];
	$adres=$_POST["adres"];
	$adres=$_POST["dogumyeri"];
    $sql=mysql_query("update uyeler set kullaniciadi='$kuladi',ad='$ad',soyad='$soyad',eposta='$eposta',dogumyeri='$dogumyeri' where kullaniciadi='$kuladi'");
	if($sql)
	echo "düzenleme basarılı";
	else 
	echo "Düzenleme hatası";
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
Güncellenecek Kaydı Seçiniz
<label for="kuladi"></label>
<select name="kuladi" id="kuladi">

<?php
include "baglan.php";
$sql=mysql_query("select * from uyeler");
while($satir=mysql_fetch_array($sql))
{
	echo "<option>". $satir["kuladi"]."</option>";
}
?>
</select>
<input type="submit" name="btn" value="Göster" />
</form>



<form action="" method="post">
Kullanıcı Adı:
<input type="text" name="kuladi" value="<?php echo $kayit["kuladi"];?>" /><br />
Ad:
<input type="text" name="ad" value="<?php echo $kayit["ad"];?>" /><br />
Soyad:
<input type="text" name="soyad" value="<?php echo $kayit["soyad"];?> " /><br />
E-Posta:
<input type="text" name="eposta" value="<?php echo $kayit["eposta"];?>" /><br />
Sifre:
<input type="text" name="sifre" value="<?php echo $kayit["sifre"];?> " /><br />
Doğum Yeri:
<input type="text" name="dogumyeri" value="<?php echo $kayit["dogumyeri"];?> " /><br />
<input type="submit" name="btn2" value="Güncelleştir" />
</form>
</body>
</html>