<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include "baglan.php";
$ip=$_SERVER['REMOTE_ADDR'];
$bugununtarihi=date("Y-m-d");
$zaman=time();
$suresiniri=$zaman-60*5;
$gun=2;


$kullanicisorgu=mysql_query("select * from ipsayaci where tarih='$bugununtarihi' and ip='$ip'");
$kullanicisorguadet=mysql_num_rows($kullanicisorgu);
if($kullanicisorguadet==0)
{
	$sql=mysql_query("insert into ipsayaci(tarih,tiklama,ip)values('$bugununtarihi',1,'$ip')");
	
	$sql2=mysql_query("select * from toplamsayac");
	$toplamsayacadet=mysql_num_rows($sql2);
		if($toplamsayacadet==0)
			{
				$sql3=mysql_query("insert into toplamsayac (toplamtekil,toplamcogul)values (1,1)");}
				else
				{
				$sql4=mysql_query("update toplamsayac set toplamtekil=toplamtekil+1,toplamcogul=toplamcogul+1")	;
				}
	

	
	
}
else
{
	$sql5=mysql_query("update ipsayaci set tiklama=tiklama+1 where tarih='$bugununtarihi' and ip='$ip'");
	$sql6=mysql_query("update toplamsayac set toplamcogul=toplamcogul+1");

}

//x gün önceki kayıtları sil
if($gun>0)
{
$kayitsil=mysql_query("DELETE FROM ipsayaci where tarih<DATE_SUB('$bugununtarihi', INTERVAL $gun DAY)")	;
}
//x gün önceki kayıtları sil bitti

//oturum süresini geçen kullanıcıları silelim
$sureasansil=mysql_query("delete from onlineziyaretci where tarih<$suresiniri");
//oturum süresi geçen kullanıcı silme sonu


$onlinevarmi=mysql_query("select * from onlineziyaretci where ip='$ip'");
$varmi=mysql_num_rows($onlinevarmi);
if($varmi==0)
{
$onlineekle=mysql_query("insert into onlineziyaretci (ip,tarih) values('$ip',$zaman)")	;
}
else
{
$onlineguncelle=mysql_query("update onlineziyaretci set tarih=$zaman where ip='$ip'");
}

//online ziyaretçi sayısını bulalım
$onlinekisi=mysql_query("select * from onlineziyaretci");
$onlinekisisayisi=mysql_num_rows($onlinekisi);
//online ziyaretçi bulma kodu sonu


//toplam tekil ve toplamçogul bulma
$toplam=mysql_query("select * from toplamsayac");
$satir=mysql_fetch_array($toplam);
$toplamtekil=$satir["toplamtekil"];
$toplamcogul=$satir["toplamcogul"];
//toplam tekil ve toplamcoğul bulma sonu

//bugün tekil ve bugünçoğul bulalım
$sql=mysql_query("select COUNT(ip) AS tekil, SUM(tiklama) AS cogul from ipsayaci where tarih='$bugununtarihi'");
$satir2=mysql_fetch_array($sql);
$buguntekil=$satir2["tekil"];
$buguncogul=$satir2["cogul"];
//bugün tekil ve çoğul bulma sonu



//Dün tekil ve Dünçoğul bulalım
$sql=mysql_query("select COUNT(ip) AS tekil, SUM(tiklama) AS cogul from ipsayaci where tarih=DATE_SUB('$bugununtarihi',INTERVAL 1 DAY)");
$satir3=mysql_fetch_array($sql);
$duntekil=$satir3["tekil"];
$duncogul=$satir3["cogul"];
//Dün tekil ve çoğul bulma sonu
?>

<table border="1">
<tr>
	<td>Online Kişi:</td>
    <td><?php echo $onlinekisisayisi; ?>
</tr>

<tr>
	<td>Bugün Tekil:</td>
    <td><?php echo $buguntekil; ?>
</tr>

<tr>
	<td>Bugün Çoğul:</td>
    <td><?php echo $buguncogul; ?>
</tr>

<tr>
	<td>Dün Tekil:</td>
    <td><?php echo $duntekil; ?>
</tr>

<tr>
	<td>Dün Çoğul:</td>
    <td><?php echo $duncogul; ?>
</tr>

<tr>
	<td>Toplam Tekil:</td>
    <td><?php echo $toplamtekil; ?>
</tr>

<tr>
	<td>Toplam Çoğul</td>
    <td><?php echo $toplamcogul; ?>
</tr>

<tr>
	<td>IP Adresiniz:</td>
    <td><?php echo $ip; ?>
</tr>









</table>










</body>
</html>