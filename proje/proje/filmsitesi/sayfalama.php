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
	<form method="post">
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
				        	<li> <a href="uyeol.php">ÜYE OL</a> </li>
				        	<li> <a href="#">HAKKINDA</a> </li>
			        		<li>
                            	<div id="mdiv" onkeyup="this.style.background='orange'" onkeydown="this.style.background='red'">
                    				
                                	<?php
									session_start();
									include("baglan.php");
												if(@$_SESSION["oturumdurumu"]==1)
									{
										echo"Hoşgeldin ".$_SESSION["oturumacan"].
										"<div id='mdiv'><input type='submit' name='cikis' value='ÇIKIŞ'></div>";
									}
									else
									{
										echo"
										
										<input type='text' id='mgiris' name='kadi' placeholder='Kullanıcı Adı:' />
                    					<input type='password' id='mgiris' name='sifre' placeholder='Şifre:' />
                    					<input type='submit' id='mgiris' value='GİRİŞ' name='gbtn' placeholder='Giriş' />
                    				";
									}
									if(@$_POST["gbtn"]=="GİRİŞ"  )
									{
										$kadi=$_POST["kadi"];
										$sifre=$_POST["sifre"];
										$sql=mysql_query("select * from kullanici");
										while($satir=mysql_fetch_array($sql))
										{
											if($satir["uye_adi"]==$kadi and $satir["sifre"]==$sifre)
											{
												$_SESSION["oturumdurumu"]=1;
												$_SESSION["oturumacan"]=$kadi;
												echo"Hoşgeldin $kadi";
												header("refresh:0;");
											}
											else if($satir["uye_adi"]!=$kadi and $satir["sifre"]!=$sifre)
											echo"<script>alert('Kullanıcı Adı veya Şİfre Yanlış!')</script>";
										}
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
                	</div>
                   <div id="icerik">
                   <div class="icerik-orta">
                   <button style="width:725px; height:50px; text-align:center;font-size:30px;">Yeni Filmler</button>
                   <ul>
                   
                   <?php
				   include"baglan.php";
				   				$sayfada = 4; // sayfada gösterilecek içerik miktarını belirtiyoruz.
 
$sorgu = mysql_query('SELECT COUNT(*) AS toplam FROM filmler');
$sonuc = mysql_fetch_assoc($sorgu);
$toplam_icerik = $sonuc['toplam'];
 
$toplam_sayfa = ceil($toplam_icerik / $sayfada);

// eğer sayfa girilmemişse 1 varsayalım.
$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
 
// eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
if($sayfa < 1) $sayfa = 1; 
 
// toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 




// kaçıncı içerikten başlanacağını ifade edecek limit değeri.
$limit = ($sayfa - 1) * $sayfada;
 
$sorgu = mysql_query('SELECT * FROM filmler LIMIT ' . $limit . ', ' . $sayfada);
 
while($satir = mysql_fetch_array($sorgu)) {
                   echo"<li><img src='$satir[6]' alt='$satir[1]'width='149px' height='221px' class='afis' />
                   <a href='#' class='baslikyazi'>$satir[1]</a><br/>
                   <span><a href='#'  style='text-decoration:none;'> Kategori:$satir[2]</a></span><br />
                   <span >dili:tükçe altyazı</span><br />         <span>imdb:$satir[4]</span><br />
                   <span><a href='https://www.youtube.com/watch?v=$satir[5]'  style='text-decoration:none;'>trailer:youtube</a></span><br />
                   <span>tarih:$satir[9]</span><br />
                   <button>Filmi İzle</button>
                   </li>";
}



for($s = 1; $s <= $toplam_sayfa; $s++) {
   if($sayfa == $s) { // eğer bulunduğumuz sayfa ise link yapma.
      echo $s . ' '; 
   } else {
      echo '<a href="?sayfa=' . $s . '">' . $s . '</a> ';
   }
}
		
				   $sqlfilm=mysql_query("select * from filmler limit 0,12");
				   while($satir=mysql_fetch_array($sqlfilm)){
					   
				   }
				   ?>
                   
                   </ul>
                   </div>
                   <div class="icerik-sa">
                   <button style="width:225px; height:50px; text-align:center;font-size:30px;">En çok izlenenler</button>
                   <ul>
                   <?php
				   include"baglan.php";
				   $sqlfilmi=mysql_query("select max() from filmler whre ");
				   while($satirs=mysql_fetch_array($sqlfilmi)){
                   echo"<li>
                   <span>$satirs[1]</span><br />
                   <img src='$satirs[6]' width='149px' height='221px' class='afis1' />
                   <span>izlenme:$satirs[7]</span>
                   </li>";
					   }
				   ?>
                   </ul>
                   </div>
                   </div>
        	</div>
    	</div>
       
    </form>
</body>
</html>