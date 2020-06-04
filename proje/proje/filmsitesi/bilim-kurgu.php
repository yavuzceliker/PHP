<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MOVIECLUP</title>
</head>
<link rel="stylesheet" href="style.css" />
<style> 
body{background:url(images/sec.png)no-repeat center center fixed;
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
									if(@$_POST["gbtn"]=="GİRİŞ")
									{
										$kadi=$_POST["kadi"];
										$sifre=$_POST["sifre"];
										$sql=mysql_query("select * from kullanici");
										while($satir=mysql_fetch_array($sql))
										{
											if($satir["uye_adi"]==$kadi and $satir["sifre"]==$sifre)
											{
												$_SESSION["oturumdurumu"]=1;
												$_SESSION["oturumacan"]=$satir['uye_id'];
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
                   <div id="filmler">
                   <h1 style="width:100%; text-align:center;font-size:30px; color:red;">Yeni Filmler</h1>
                   
                   <?php
				   $sayfada = 12; // sayfada gösterilecek içerik miktarını belirtiyoruz.
 
$sorgu = mysql_query("SELECT COUNT(*) AS toplam FROM filmler where kategori_adi='Bilim Kurgu'");
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
 
$sorgu = mysql_query("SELECT * FROM filmler where kategori_adi='Bilim Kurgu'  LIMIT " . $limit . ", " . $sayfada );
 
while($satir = mysql_fetch_array($sorgu)) {
	echo"
					   <a href='#'><!-- <<<<<<<<<<FİLM URL Sİ BURAYA YAZILACAK>>>>>>>>>>>>>> -->
					   	<div id='film'>
							<table>
								<tr>
									<td rowspan='5'><img src='".$satir['resim']."' id='afis' width='100px' height='150px' /></td>						
									<td>$satir[1]</td>
								</tr>
								<tr>
									<td>Kategori:".$satir['kategori_adi']."</td>
								</tr>
								<tr>
									<td>IMDB:".$satir['imdb']."</td>
								</tr>
								<tr>
									<td><a href='https://www.youtube.com/watch?v=".$satir['trailer']."'  style='text-decoration:none;'>TRAİLER</a></td>
								</tr>
								<tr>
									<td>Eklendi:".$satir['tarih']."</td>
								</tr>													
							</table>
					</div>
				</a>	";
                  
}


echo"<div id='orta'>";
$sayfa_goster = 3; // gösterilecek sayfa sayısı
 
$en_az_orta = ceil($sayfa_goster/2);
$en_fazla_orta = ($toplam_sayfa+1) - $en_az_orta;
 
$sayfa_orta = $sayfa;
if($sayfa_orta < $en_az_orta) $sayfa_orta = $en_az_orta;
if($sayfa_orta > $en_fazla_orta) $sayfa_orta = $en_fazla_orta;
 
$sol_sayfalar = round($sayfa_orta - (($sayfa_goster-1) / 2));
$sag_sayfalar = round((($sayfa_goster-1) / 2) + $sayfa_orta); 
 
if($sol_sayfalar < 1) $sol_sayfalar = 1;
if($sag_sayfalar > $toplam_sayfa) $sag_sayfalar = $toplam_sayfa;
 
 
if($sayfa != 1) echo ' <a href="?sayfa=1">&lt;&lt;İlk sayfa</a> ';
if($sayfa != 1) echo ' <a href="?sayfa='.($sayfa-1).'">&lt;Önceki</a> ';
 
for($s = $sol_sayfalar; $s <= $sag_sayfalar; $s++) {
    if($sayfa == $s) {
        echo '[' . $s . '] ';
    } else {
        echo '<a href="?sayfa='.$s.'">'.$s.'</a> ';
    }
}
 
if($sayfa != $toplam_sayfa) echo ' <a href="?sayfa='.($sayfa+1).'">Sonraki&gt;</a> ';
if($sayfa != $toplam_sayfa) echo ' <a href="?sayfa='.$toplam_sayfa.'">Son sayfa&gt;&gt;</a>';
echo"</div>";
				   ?>
                   <footer style="width:100%; font-weight:bold; text-align:center;">DESIGNED BY MOVIECLUP INC.</footer>
                   </div>
                   
                   
                  <!-- <div class="icerik-sa">
                   <button style="width:225px; height:50px; text-align:center;font-size:30px;">En çok izlenenler</button>
                   <ul>
                   <?php
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
                   -->
                   </div>
                   </div>
       
    </form>
</body>
</html>