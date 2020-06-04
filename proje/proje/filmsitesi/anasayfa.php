<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MOVIECLUB</title>
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
										if(@$_SESSION["kacadet"]=="")
										$_SESSION["kacadet"]=3;
										
										include("baglan.php");
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
											$sql=mysql_query("select * from kullanici");
											while($satir=mysql_fetch_array($sql))
											{
												if($satir["uye_adi"]==$kadi and $satir["sifre"]==$sifre)
												{
													$_SESSION["oturumdurumu"]=1;
													$_SESSION["oturumacan"]=$satir['uye_adi'];
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

				   ?>
                   <footer style="width:100%; float:left; font-weight:bold; margin-top:3%; text-align:center;font-size:25px;">DESIGNED BY MOVIECLUB INC.</footer>
                   </div>
                   
                   
                   </div>
                   </div>
       
    </form>
</body>
</html>