<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MOVIECLUB</title>
</head>
<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
<?php
session_start();
ob_start();
include"baglan.php";
?>
<link rel="stylesheet" href="style.css" />
<style> 
body{background:url(images/bbg.jpg)fixed;}
#kapat,#kapat2{background:url(images/close.jpg); width:36px; height:36px; border:none; font-size:0.001px;}
</style>
<body>
<button value="<?php echo $x=$_SESSION['mesaj'];?>" style="visibility:hidden;" id="control"><?php echo $x=$_SESSION['mesaj'];?></button>
<button value="<?php echo $y=$_SESSION['anket'];?>" style="visibility:hidden;" id="control2"><?php echo $y=$_SESSION['anket'];?></button>
    <form method="post">
	<div id="anketsonucu" style=" display:none; z-index:1;position:absolute;padding:10px;border-radius:20px;border:10px double black;background:#CCCDEA; margin:15% 0 0 28%;">
    	<?php
$sql=mysql_query("select * from anket where durum=1");
$satir=mysql_fetch_array($sql);
$toplamoy=$satir["oy"]+$satir["oy1"]+$satir["oy2"]+$satir["oy3"]+$satir["oy4"];
$yuzde=(100*$satir["oy"])/$toplamoy;
$yuzde1=(100*$satir["oy1"])/$toplamoy;
$yuzde2=(100*$satir["oy2"])/$toplamoy;
$yuzde3=(100*$satir["oy3"])/$toplamoy;
$yuzde4=(100*$satir["oy4"])/$toplamoy;
echo "Soru: ".$satir["soru"]." <input type='submit' value='.' name='kapat' id='kapat2'/><br>";

echo "
<table style='float:left; width:600px;'>
<tr> <td style='width:200px; padding-right:30px;'><img style='background:url(images/yildiz.jpg); width:40px; height:40px;' ></td> <td style=''> <div style='background:blue;   float:left; width:".$yuzde. "%; '>".round($yuzde) ."% </div> </td> </tr>
<tr> <td><img style='background:url(images/yildiz.jpg); width:80px; height:40px;' ></td> <td> <div style='background:pink;   float:left; width:".$yuzde1."%; '>".round($yuzde1)."% </div> </td> </tr>
<tr> <td><img style='background:url(images/yildiz.jpg); width:120px; height:40px;' ></td> <td> <div style='background:green;  float:left; width:".$yuzde2."%; '>".round($yuzde2)."% </div> </td> </tr>
<tr> <td><img style='background:url(images/yildiz.jpg); width:160px; height:40px;' ></td> <td> <div style='background:orange; float:left; width:".$yuzde3."%; '>".round($yuzde3)."% </div> </td> </tr>
<tr> <td><img style='background:url(images/yildiz.jpg); width:200px; height:40px;' ></td> <td> <div style='background:red;    float:left; width:".$yuzde4."%; '>".round($yuzde4)."% </div> </td> </tr>
</table>
";
if(@$_POST['kapat']==".")
{
	$_SESSION['anket']=0;
	header("refresh:0;");
}
?>
    </div>
    	<div id="is">
        	<div id="container">
        <div style=" display:none; position:absolute; margin:5%; z-index:2;">
        <script type="text/javascript" src="jquery-2.1.4.min.js"></script>
<script type='text/javascript'>
  $(document).ready(function(){
  
  var $y=document.getElementById("control2").value;	  
  var $x=document.getElementById("control").value;
   if($x==0)
  	{setTimeout(anket, 10000);} 
$('#btn').click(function(){
			document.getElementById("control").innerHTML=1;
			document.getElementById("control2").innerHTML=1;
		}); 
if($y==1)
$('#anketsonucu').show('slow');


  });
  function anket() {
  $( 'div:hidden' ).show( 'slow' );
}
</script>
<?php
if(@$_POST['kapat']==".")
{
	$_SESSION['mesaj']=1;
	header('refresh:0;');
}
?>
  <table id="table">
                     <tr><th colspan="2" id="baslik">Sitemizi Değerlendirir misiniz?</th><td><input type="submit" value="." name='kapat' id="kapat"/></td></tr>
                     
<tr><td colspan="3" style="text-align:center;">      
<?php
$sql=mysql_query("select * from anket where durum=1");
$satir=mysql_fetch_array($sql);
?>
<?php echo $satir["soru"]; ?><br />
<input type="radio" name="secim" value="oy" id="oy" />
<?php echo $satir["cevap"]; ?>

<input type="radio" name="secim" value="oy1"  id="oy"/>
<?php echo $satir["cevap1"]; ?>

<input type="radio" name="secim" value="oy2"  id="oy"/>
<?php echo $satir["cevap2"]; ?>

<input type="radio" name="secim" value="oy3"  id="oy"/>
<?php echo $satir["cevap3"]; ?>

<input type="radio" name="secim" value="oy4"  id="oy"/>
<?php echo $satir["cevap4"]; ?>

<input type="submit" name="btn" value="Oyla" id="oy" />
<?php 
	if(@$_POST['btn']=="Oyla")
	{$secim=$_POST["secim"];
	
	  	$sql=mysql_query("update anket set $secim=$secim+1 where durum=1");
		$_SESSION['mesaj']=1;
		$_SESSION['anket']=1;
		header("refresh:0;");
	}
?>
</td></tr>
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
                	</div>		                   <div id="filmler">
                   <div style="width:100%;"> 
                   <h1 style="width:62%; margin-left:19%; float:left; text-align:center;font-size:30px; color:red;">Yeni Filmler</h1>
                   <input type="submit" name="ikili" style="
                   <?php
                   if(@$_POST["ikili"]==" ")
				    {
						$_SESSION["kacadet"]--;
						if($_SESSION["kacadet"]<=3)
						$_SESSION["kacadet"]=3;
						
						echo"float:right; width:27px;height:27px; border:none;background:url(images/bbgh.jpg) no-repeat;";
						
						
				    }
					else
					{
						echo"float:right; width:27px;height:27px; border:none;background:url(images/bbg.jpg) no-repeat;";
					}
				   ?>
                   " value=" " />
                   <input type="submit" name="coklu" style="
                   <?php
                   if(@$_POST["coklu"]==" ")
				    { 
						$_SESSION["kacadet"]++;
						if($_SESSION["kacadet"]>=12)
						$_SESSION["kacadet"]=12;
						
				    	
						echo"float:right; width:27px;height:27px; border:none;background:url(images/cbbgh.jpg) no-repeat;";
				    }
					else
					{
						echo"float:right; width:27px;height:27px; border:none;background:url(images/cbbg.jpg) no-repeat;";
					}
				   	?>
                    " value=" "/>
                    </div>
					<?php
$kacadet=$_SESSION["kacadet"];
@$sayfa=$_GET["sayfa"];
if(empty($sayfa)) $sayfa=1;
$baslangic=($sayfa-1)*$kacadet;

$sql=mysql_query("select * from filmler limit $baslangic,$kacadet");

while($satir=mysql_fetch_array($sql))
{
	
					echo"	
				<a href='      film.php?filmid=".$satir['film_id']."'>
					<div id='film'>
						<table>
							<tr>
								<td rowspan='5'><img src='".$satir['resim']."' id='afis' width='100px' height='150px' /></td>						
								<th id='filmh'>$satir[1]</th>
							</tr>
							<tr>
								<td>Kategori:".$satir['kategori_adi']."</td>
							</tr>
							<tr>
								<td>IMDB:".$satir['imdb']."</td>
							</tr>
							<tr>
								<td>İzlenme:".$satir['izlenme']."</td>
							</tr>
							<tr>
								<td>Eklendi:".$satir['tarih']."</td>
							</tr>													
						</table>
					</div>
				</a>";
}
if(@$_GET['sayfa'])
	null;
else 
	$_GET['sayfa']=1;

$sql=mysql_query("select * from filmler");
$kayitsayisi=mysql_num_rows($sql);
$sayfasayisi=ceil($kayitsayisi/$kacadet);
$sonuclu=$sayfasayisi-3;
echo "<div id='sayfalama'><div style=text-align:center;>";
if($_GET['sayfa']!=1)
{
	echo"<a id='numara' href='?sayfa=1'><<</a>";
	echo"<a id='numara' href='?sayfa=".($_GET['sayfa']-3)."'><</a>";
}
for($i=$_GET['sayfa'];$i<=$sayfasayisi;$i++)
{
if($i<=($_GET['sayfa']+2))
	{
	if($_GET['sayfa']==$i)
		echo "<a id='numara' style='color:red;' href=anasayfa.php?sayfa=".$i.">".$i."</a>";	
	else
		echo "<a id='numara' href=anasayfa.php?sayfa=".$i.">".$i."</a>";	
	}
else if($i>=$sonuclu)
	echo "<a id='numara' href=anasayfa.php?sayfa=".$i.">".$i."</a>";
else
	{echo" ...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "; $i=$sonuclu;}
}

if($_GET['sayfa']!=$sayfasayisi)
{
	echo"<a id='numara' href='?sayfa=$sayfasayisi'>>></a>";
	echo"<a id='numara' href='?sayfa=".($_GET['sayfa']+3)."'>></a>";
}
	
echo"</div></div>";


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
ob_end_flush();
				   ?>
                   <footer style="width:100%; float:left; font-weight:bold; margin-top:3%; text-align:center;font-size:25px;">DESIGNED BY MOVIECLUB INC.<div id="menu">
<?php
function GetIP(){
	if(getenv("HTTP_CLIENT_IP")) {
 		$ip = getenv("HTTP_CLIENT_IP");
 	} elseif(getenv("HTTP_X_FORWARDED_FOR")) {
 		$ip = getenv("HTTP_X_FORWARDED_FOR");
 		if (strstr($ip, ',')) {
 			$tmp = explode (',', $ip);
 			$ip = trim($tmp[0]);
 		}
 	} else {
 	$ip = getenv("REMOTE_ADDR");
 	}
	return $ip;
}
$ip=GetIP();
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
	<th>Online Kişi:</th>
	<th>Bugün Tekil:</th>
	<th>Bugün Çoğul:</th>
	<th>Dün Tekil:</th>
	<th>Dün Çoğul:</th>
	<th>Toplam Tekil:</th>
	<th>Toplam Çoğul</th>
	<th>IP Adresiniz:</th>
</tr>

<tr>
    <td><?php echo $onlinekisisayisi; ?>
    <td><?php echo $buguntekil; ?>
    <td><?php echo $buguncogul; ?>
    <td><?php echo $duntekil; ?>
    <td><?php echo $duncogul; ?>
    <td><?php echo $toplamtekil; ?>
    <td><?php echo $toplamcogul; ?>
    <td><?php echo $ip; ?>
</tr>
</table>



</div>
</div>

       </footer>
                   </div>
                   
                   
                   </div>
                   </div>
       
    </form>
</body>
</html>