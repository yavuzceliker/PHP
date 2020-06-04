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
				        	<li> <a href="uyeol.php">ÜYE OL</a> </li>
				        	<li> <a href="#">HAKKINDA</a> </li>
			        	</ul>
                	</div>
           			 <table id="table">
                     <tr><th colspan="2" id="baslik">Bize Ulaşın</th></tr>
                     <tr><td colspan="2"><p>
                     <b>Bize mail ile ulaşmak için: <b><b style="color:red;">help@movieclub.com</b>
                     </p></td></tr>
<tr><td>Ad Soyad:</td> <td><input type="text" name="as" id="text"/></td></tr>
<tr><td>Başlık:</td> <td><input type="text" name="baslik" id="text"/></td></tr>
<tr><td>Mesaj:</td> <td><textarea name="mesaj" id="text"/></textarea></td></tr>
<tr><td>E-Mail:</td > <td><input type="text" name="posta" id="text"/></td></td></tr>
<tr><td colspan="2"><input type="submit" id="btn" name="btn" value="GÖNDER"/></td>

<td><?php
if(@$_POST["btn"]=="GÖNDER")
{
	include"baglan.php";
	$as=$_POST["as"];
	$baslik=$_POST["baslik"];
	$mesaj=$_POST["mesaj"];
	$posta=$_POST["posta"];
	$tarih=date("d-m-Y");
	
	if($mesaj=="" or $as=="" or $posta=="" or $baslik=="")
	{
		echo"<script>alert('BOŞ GEÇMEYİNİZ!');</script>";
	}
	else
	{
	$ekle=mysql_query("insert into ziyaretci(adsoyad,email,baslik,mesaj,tarih)values('$as','$posta','$baslik','$mesaj','$tarih')");
		if($ekle)
			echo"<script>alert('GÖNDERİLDİ!');</script>";
		else
			echo"<script>alert('GÖNDERİLMEDİ!');</script>";
	}
}
?>
</td></tr>
</table>        
        	</div>
           
       
    </form>

</body>
</html>