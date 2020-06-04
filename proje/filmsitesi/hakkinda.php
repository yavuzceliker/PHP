<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ANASAYFA 1.0</title>
</head>
<link rel="stylesheet" href="style.css" />
<style> body{background:url(images/bbg.jpg)fixed;}
</style>
<body>
	<form method="post" enctype="multipart/form-data">
    		<div id="container">
                	
                   
                    

    <div id="menu">
                    	<ul class="menu">
				        	<li class="secilen"> <a href="anasayfa.php?sayfa=1">ANASAYFA</a> </li>
				        	<li> <a href="#">TÜRLER</a> 
                            	
                                <ul class="acilirmenu">
						        	<li> <a href="bilim-kurgu.php">BİLİM KURGU</a> </li>
						        	<li> <a href="komedi.php">KOMEDİ</a> </li>
						        	<li> <a href="aksiyon.php">AKSİYON & MACERA</a> </li>
						        	<li> <a href="korku.php">KORKU & GERİLİM</a> </li>
						        	<li> <a href="animasyon.php">ANİMASYON</a> </li>
						        	<li> <a href="cocuk.php">ÇOCUK</a> </li>
					        	</ul>

				         	</li>
				        	<li> <a href="uyeol.php">ÜYE OL</a> </li>
				        	<li> <a href="hakkinda.php">HAKKINDA</a> </li>
			        		<li>
                            	<div id="mdiv">
                    				<?php
										if(@$_SESSION["oturumdurumu"]==1)
										{
											echo"Hoşgeldin ".$_SESSION["oturumacan"]." <input type='submit' style='margin:-10px 5px 0 0; padding:3px;' name='cikis' value='ÇIKIŞ' />";
										}
										else
										{
											echo"
											<input type='text' id='mgiris' name='kadi' placeholder='Kullanıcı Adı:' />
                    						<input type='password' id='mgiris' name='sifre' placeholder='Şifre:' />
                    						<input type='submit' id='mgiris' value='GİRİŞ' name='gbtn' placeholder='Giriş' />
                    						";
										}
										
										if(@$_POST["gbtn"]=="GİRİŞ")
										{
											$kadi=$_POST["kadi"];
											$sifre=$_POST["sifre"];
											$sql=mysql_query("select * from kullanici where uye_adi='$kadi' and sifre='$sifre'");
											@$satir=mysql_fetch_array($sql);
												if($satir["uye_adi"]==$kadi and $satir["sifre"]==$sifre)
												{
													$_SESSION["oturumdurumu"]=1;
													$_SESSION["oturumacan"]=$satir['uye_adi'];
													header("refresh:0;");
												}
												else
												echo"<script>alert('Kullanıcı Adı veya Şİfre Yanlış!')</script>";
											
										}
                                    	//*******************GİRİŞ KONTROL ***************************
										if(@$_POST["cikis"]=="ÇIKIŞ")
										{
											session_destroy();
											header("refresh:0;");
										}
									?>
                                </div>
                            </li>
                
                        </ul>	
                	</div>		      			 <table id="table">
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