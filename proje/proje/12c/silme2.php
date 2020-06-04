<?php
include "baglan.php";
$silinecek=$_GET["silinecek"];
$sql=mysql_query("delete from uyeler where id=$silinecek");
if($sql)
echo "silindi";
else
echo "silinmedi";


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tablo Üzerinde Silme İşlemi</title>
</head>

<body>
<h1>Kayıt Silme İşlemi</h1>
<table border="1">
<tr>
	<td>KullanıcıAdı</td>
    <td>Şifre</td>
    <td>Eposta</td>
    <td>İşlem</td>
</tr>
<?php
include "baglan.php";
$sql=mysql_query("select * from uyeler");
while($satir=mysql_fetch_array($sql))
{
echo "<tr>";
echo "<td>".$satir["kullaniciadi"]."</td>";
echo "<td>".$satir["sifre"]."</td>";
echo "<td>".$satir["eposta"]."</td>";
echo "<td><a href=silme2.php?silinecek=".$satir["id"].">Sil</a></td>";
echo "</tr>";	
	
}

?>

</table>

</body>
</html>