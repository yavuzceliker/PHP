<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ANASAYFA 1.0</title>
</head>
<link rel="stylesheet" href="style.css" />
<style> 
body{background:url(   <?php echo"images/sec.png"; ?>     )no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}
</style>
<body>
	<form method="post" enctype="multipart/form-data">
    	<div id="is">
        	<div id="container">
                	
                   
                    
                    <div id="menu">
                    	<ul class="menu">
				        	<li class="secilen"> <a href="anasayfa.php">ANASAYFA</a> </li>
				        	<li> <a href="#">TÜRLER</a> 
                            	
                                <ul class="acilirmenu">
						        	<li> <a href="#">BİLİM KURGU</a> </li>
						        	<li> <a href="#">KOMEDİ</a> </li>
						        	<li> <a href="#">AKSİYON & MACERA</a> </li>
						        	<li> <a href="#">KORKU & GERİLİM</a> </li>
						        	<li> <a href="#">ANİMASYON</a> </li>
						        	<li> <a href="#">ÇOCUK</a> </li>
					        	</ul>

				         	</li>
				        	<li> <a href="#">ÜYE OL</a> </li>
				        	<li> <a href="hakkinda.php">HAKKINDA</a> </li>
			        	</ul>
                	</div>
           			 <table id="table">
                     <tr><th colspan="2" id="baslik">KAYDOL</th></tr>
<tr><td>Kullanıcı Adı</td> <td><input type="text" name="kadi" id="text"/></td></tr>
<tr><td>E-Mail</td > <td><input type="text" name="posta" id="text"/></td></td></tr>
<tr><td>Şifre</td> <td><input type="password" name="sifre" id="text"/></td></td></tr>
<tr><td>Profil Resmi</td> <td><input type="file" name="img"/></td></td></tr>
<tr><td colspan="2"><input type="submit" id="btn" name="btn" value="KAYDOL"/></td>

<td><?php
if(@$_POST["btn"]=="KAYDOL")
{
	include"baglan.php";
	$kadi=$_POST["kadi"];
	$posta=$_POST["posta"];
	$sifre=$_POST["sifre"];
	$tarih=date("d-m-Y");
	$imgadres="images/profilepic/".$kadi.".jpg";
	$gadres=$_FILES['img']['tmp_name'];
	
	if($kadi=="" or $posta=="" or $sifre=="" or $gadres=="")
	{
		echo"BOŞ GEÇMEYİNİZ!";
	}
	else
	{
	copy($gadres,$imgadres);
	$ekle=mysql_query("insert into kullanici(uye_adi,e_posta,sifre,resim,uyelik_tarihi)values('$kadi','$posta','$sifre','$imgadres','$tarih')");
		if($ekle)
			echo"KAYIT EKLENDİ!";
		else
			echo"HATA OLUŞTU!";
	}
}
?>
</td></tr>
</table>        
        	</div>
           
    	</div>
       
    </form>

</body>
</html>