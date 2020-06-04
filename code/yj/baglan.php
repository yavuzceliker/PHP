<?php
/*sunucuya bağlanmak
mysql_connect("sunucuadı","kullanıcıadı","şifre")
*/
$baglan=mysql_connect("localhost","root","");
/*veri tabanını seçmek
mysql_select_db("veritabanıadı","sunucubağlantıadı")
*/
$sec=mysql_select_db("okul",$baglan);

//Türkçe karakter sorunu yaşamamak için
mysql_query("set names 'utf8'");

?>