<?php
if($_POST["btn"]=="Kaydet")
{
include "baglan.php";
$kullaniciadi=$_POST["kullaniciadi"]	;
$eposta=$_POST["eposta"];
$sifre=$_POST["sifre"];
$dogumyeri=$_POST["dogumyeri"];
$cinsiyet=$_POST["cinsiyet"];
$adres=$_POST["adres"];
/* kayıt eklemek için kullandığımız sql komutu
insert into tabloismi(tablodaki eklenecek alan1,alan2,alan3,alan4....)values("eklenecek deger1,deger2,deger3,deger4,...)
*/

$ekle=mysql_query("insert into uyeler(kullaniciadi,eposta,sifre,dogumyeri,cinsiyet,adres)values('$kullaniciadi','$eposta','$sifre','$dogumyeri','$cinsiyet','$adres')");
if($ekle)
echo "Kayıt Eklendi";
else
echo "Kayıt Ekleme Hatası";




	
}

?>