<?php
include "baglan.php";

if(@$_POST["btn"]=="Getir")
{
$kuladi=$_POST["kuladi"];
$sql=mysql_query("select * from uyeler where kullaniciadi='$kuladi'");
$kayit=mysql_fetch_array($sql);
}

if($_POST["btn2"]=="Güncelleştir")
{
	$kuladi=$_POST["kuladi"];
	$eposta=$_POST["eposta"];
	$sifre=$_POST["sifre"];
	$dogumyeri=$_POST["dogumyeri"];
	$adres=$_POST["adres"];
	$sql=mysql_query("update uyeler set kullaniciadi='$kuladi',eposta='$epota',sifre='$sifre',dogumyeri='$dogumyeri',adres='$adres' where kullaniciadi='$kuladi'");
	if($sql)
	echo "düzenleme başarılı";
	else
	echo "Düzenleme Hatası";	
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
  Düzenlenecek Kullanıcıyı seçiniz 
  <label for="kuladi"></label>
  <select name="kuladi" id="kuladi">
  <?php
  include "baglan.php";
  $sql=mysql_query("select kullaniciadi from uyeler");
  while($satir=mysql_fetch_array($sql))
  {
	  echo "<option>".$satir["kullaniciadi"]."</option>";
	}
  ?>
  </select>
<input type="submit" name="btn" id="btn" value="Getir" />
</form>

<br />
<hr />
<form action="" method="post">
Kullanıcı Adı:
<input type="text" name="kuladi" value="<?php echo $kayit["kullaniciadi"]; ?>" readonly="readonly" /><br />
Eposta:
<input type="text" name="eposta" value="<?php echo $kayit["eposta"]; ?>" /><br />
Şifre:
<input type="text" name="sifre" value="<?php echo $kayit["sifre"]; ?>" /><br />
Doğum Yeri:
<input type="text" name="dogumyeri" value="<?php echo $kayit["dogumyeri"]; ?>" /><br />
Adres:
<textarea name="adres" /><?php echo $kayit["adres"]; ?></textarea><br />
<input type="submit" name="btn2" value="Güncelleştir" />
</form>

</form>


</body>
</html>