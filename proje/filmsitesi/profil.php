<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MOVIECLUB</title>
<link rel="stylesheet" href="style.css" />
</head>
<?php
	session_start();
	ob_start();
	include("baglan.php");
	if($_SESSION["oturumdurumu"]==0)
	{
		header("location:index.php");
	}
?>
<style>
#container{background:none; border:none; box-shadow:none;}
body{background:url(images/bbg.jpg)fixed;}
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
                	</div>		
            <table id="admin">
            	
                 <tr>
                    <td>
                    	<table id="admintable">
                        	<tr>
                            	<th colspan="3" id="baslik"><?php echo $_SESSION["oturumacan"];?></th>
                            </tr>
                            <tr>
                            	<td rowspan="4"><img src="<?php
								//*******************      GÜNCELLEME     *******************
						
								

			$satir=mysql_fetch_array($ekle=mysql_query("select * from kullanici where uye_adi='".$_SESSION["oturumacan"]."'")); 
			echo $satir["resim"];
						
	if(@$_POST["guncelle"]=="DEĞİŞTİR")
	{
		if($_FILES['profpics']['name']!="")
		{
			$pp="images/profilepic/".$_SESSION['oturumacan'].".jpg";
			$gecici=$_FILES['profpics']['tmp_name'];
	
			if($_FILES['profpics']['name']=="")
			{	
				echo"<script> alert('BOŞ GEÇMEYİNİZ');</script>";
			}
			else
			{
			   $satir=mysql_fetch_array($ekle=mysql_query("select * from kullanici where uye_adi='".$_SESSION["oturumacan"]."'"));																			
			   @unlink($satir["resim"]);
				copy($gecici,$pp);
				$ekle=mysql_query("update kullanici set resim='$pp' where uye_adi='".$_SESSION["oturumacan"]."'");
				if($ekle)
				{
					header("refresh:0;");	
				}
			}
		
		}
		else if($_POST['kadi']!="")
		{
			$kadi=$_POST['kadi'];																			
			$ekle=mysql_query("update kullanici set uye_adi='$kadi' where uye_adi='".$_SESSION["oturumacan"]."'");
				if($ekle)
				{
					$_SESSION["oturumacan"]=$kadi;
					header("refresh:0;");	
				}
		}
		else if($_POST['sifre']!="")
		{
			$sifre=$_POST['sifre'];																			
			$ekle=mysql_query("update kullanici set sifre='$sifre' where uye_adi='".$_SESSION["oturumacan"]."'");
				if($ekle)
				{
						header("refresh:0;");
				}
		}
		else if($_POST['mail']!="")
		{
			$mail=$_POST['mail'];																			
			$ekle=mysql_query("update kullanici set e_posta='$mail' where uye_adi='".$_SESSION["oturumacan"]."'");
				if($ekle)
				{
					header("refresh:0;");	
				}	
		}
		else if($_POST['kadi']=="" and $_POST['mail']=="" and $_POST['profpics']['name']=="" and $_POST['sifre']=="")
		{
			echo"<script>GÜNCELLENECEK VERİYİ GİRİNİZ!</script>";	
		}
	}

								
								 ?>" width="100" /></td><th>Kullanıcı Adı:</th><td><?php echo $satir["uye_adi"];?></td>
                            </tr>
                            <tr>
                            	<th>Mail:</th><td><?php echo $satir["e_posta"];?></td>
                            </tr>
                            <tr>
                            	<th>Şifre:</th><td><?php echo $satir["sifre"];?></td>
                            </tr>
                            <tr>
                            	<th>Üyelik Tarihi:</th><td><?php echo $satir["uyelik_tarihi"];?></td>
                            </tr>
                            <tr>
                            	<th colspan="3">Güncelle</th>
                            </tr>
                            <tr>
                            	<td>Profil F.</td>
                                <td><input type="file" name="profpics" style="width:170px;" /></td>
                            	<td rowspan="4" ><input type="submit" name="guncelle" value="DEĞİŞTİR" style="width:100%; height:100%;"/></td>
                            </tr>
                            <tr>
                                <td>Kullanıcı A.</td>
                                <td><input type="text" name="kadi" style="width:170px;" /></td>
                           </tr>
                                <td>Şifre</td>
                                <td><input type="password" name="sifre" style="width:170px;" /></td>
                           </tr>
                                <td>E-Posta</td>
                                <td><input type="email" name="mail" style="width:170px;" /></td>
                           </tr>
                            </tr>
                        </table>
                    </td>
                 </tr>
            </table>
      	</div>
    </div>
    <?php ob_end_flush();?>
</form>
</body>
</html>