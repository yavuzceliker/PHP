<?php
if($_POST["btn"]=="Sil")
{
	$secilen=$_POST["secilen"];
$sql=mysql_query("delete from uyeler where kullaniciadi='$secilen'");
if($sql) echo "silindi"; else echo "silme hatası";

}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Veri tabanı Silmi İşlemleri</title>
</head>
<body>
<form action="" method="post">
Silinecek Kullanıcıyı seçiniz<br />
<select name="secilen">
<?php
include "baglan.php";
$sql=mysql_query("select * from uyeler");
while($satir=mysql_fetch_array($sql))
{
echo "<option>".$satir["kullaniciadi"]."</option>";
}
?>
</select>
<input type="submit" name="btn" value="Sil" />
</form>

</body>
</html>