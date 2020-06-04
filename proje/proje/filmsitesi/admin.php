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
	$sql=mysql_query("select * from kullanici where uye_id='".$_SESSION['oturumacan']."'");
		while($satir=mysql_fetch_array($sql))
		{
			if($satir["durum"]!="admin")
			header("location:index.php");
		}
	if($_SESSION["oturumdurumu"]==0)
	{
		header("location:index.php");
	}
?>
<style>
#container{background:none; border:none; box-shadow:none;}
body{background:url(   <?php echo"images/sec.png"; ?>     )no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}
</style>
<body>
<form method="post" enctype="multipart/form-data">
	<div id="container">
		
            <table id="admin">
            	
                 <tr>
                    <td>
                    	<table id="admintable">
                        	<tr>
                            	<th colspan="3" id="baslik">ADMİN BİLGİLERİ</th>
                            </tr>
                            <tr>
                            	<td rowspan="3"><img src="<?php
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
		else if($_POST['mail']!="")
		{
			$mail=$_POST['mail'];																			
			$ekle=mysql_query("update kullanici set e_posta='$mail' where uye_adi='".$_SESSION["oturumacan"]."'");
				if($ekle)
				{
					header("refresh:0;");	
				}	
		}
		else if($_POST['kadi']=="" and $_POST['mail']=="" and $_POST['profpics']['name']=="")
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
                            	<th>Üyelik Tarihi:</th><td><?php echo $satir["uyelik_tarihi"];?></td>
                            </tr>
                            <tr>
                            	<th colspan="3">Güncelle</th>
                            </tr>
                            <tr>
                            	<td>Profil F.</td>
                                <td><input type="file" name="profpics" style="width:170px;" /></td>
                            	<td rowspan="3" ><input type="submit" name="guncelle" value="DEĞİŞTİR" style="width:100%; height:100%;"/></td>
                            </tr>
                            <tr>
                                <td>Kullanıcı A.</td>
                                <td><input type="text" name="kadi" style="width:170px;" /></td>
                           </tr>
                                <td>E-Posta</td>
                                <td><input type="email" name="mail" style="width:170px;" /></td>
                           </tr>
                            </tr>
                        </table>
                    </td>
                    <td>
                    	                <table id="admintable">
            		<tr>
                		<th colspan="2" id="baslik">FİLM EKLEME</th>
                	</tr>
                	<tr>
                		<td>FİLM ADI:</td><td><input type="text" name="film_adi" /></td>
                	</tr>
                	<tr>
                		<td>FİLM TÜRÜ:</td>
                        	<td>
                            	<select name="kategori">
                                	<?php
                                    	$sql=mysql_query("select * from kategoriler");
										while($satir=mysql_fetch_array($sql))
										{
											echo"<option value='".$satir["kategori_adi"]."'>".$satir["kategori_adi"]."</option>";
										}
										
									?>
                                </select>
                        	</td>
                	</tr>
                	<tr>
                		<td>TRAİLER:</td><td><input type="text" name="trailer" placeholder="Sadece youtube video kodu" /></td>
                	</tr>
                	<tr>
                		<td>İMDB PUANI:</td><td><input type="text" name="imdb"/></td>
                	</tr>
                	<tr>
                		<td>KAPAK RESMİ:</td><td><input type="file" name="filmkapak" style="width:170px;"/></td>
                	</tr>
                	<tr>
                		<td>ARKAPLAN RESMİ:</td><td><input type="file" name="filmbg" style="width:170px;"/></td>
                	</tr>
                	<tr>
                		<td>FİLM URL:</td><td><input type="text" name="filmurl" /></td>
                	</tr>
                	<tr>
                		<td>FİLM HAKKINDA:</td><td><textarea name="filmhakkinda"></textarea></td>
                	</tr>
                	<tr>
                		<td colspan="2"><input type="submit" name="filmekle" value="FİLMİ EKLE" style="width:100%; padding:3px;" /></td>
                	</tr>
                    
<?php
			if(@$_POST["filmekle"]=="FİLMİ EKLE")
			{
					$film_adi=$_POST["film_adi"];
					$trailer=$_POST["trailer"];
					$imdb=$_POST["imdb"];
					$kategori=$_POST["kategori"];
			  		$filmkapak="images/filmkapak/".$_FILES['filmkapak']['name'];
			  		$filmbg="images/filmbg/".$_FILES['filmbg']['name'];
					$gecici=$_FILES['filmkapak']['tmp_name'];
					$gecicibg=$_FILES['filmbg']['tmp_name'];
					$filmurl=$_POST["filmurl"];
					$filmhakkinda=$_POST["filmhakkinda"];
					$tarih=date("d.m.Y");
					
					
					if($film_adi=="" or $_FILES['filmkapak']['name']=="" or $_FILES['filmbg']['name']=="" or $trailer=="" or $imdb=="" or $filmurl=="" or $filmhakkinda=="")
						echo"<script> alert('BOŞ GEÇMEYİNİZ');</script>";
					else
					{
						copy($gecici,$filmkapak);
						copy($gecicibg,$filmbg);
						$ekle=mysql_query("insert into filmler(film_adi,kategori_adi,aciklama,imdb,trailer,resim,yol,tarih,gununfilmikapak)
values('$film_adi','$kategori','$filmhakkinda','$imdb','$trailer','$filmkapak','$filmurl','$tarih','$filmbg')");
					
						echo"<tr><th colspan='2'>KAYIT EKLENDİ!</th></tr>";
					}
			
			}
			//********************************** FİLM EKLEME SONU*************************
			?>
            	</table>

                    </td>
                </tr>
                <tr>
                	<td colspan="2">
            	
                    	<table id="admintable" style="width:620px;">
                        <TR><TH  colspan="5" id="baslik">ZİYARETÇİ DEFTERİ</TH></TR>
                        	<tr>
                            	<th>Başlık</th><th>Mesaj</th><th>Gönderen</th><th>Tarih</th>
                            </tr>
                            	<?php
									$sql=mysql_query("select * from ziyaretci where onay=0 order by tarih LIMIT 10");
										$x=0;
										while($satir=mysql_fetch_array($sql))
										{
											echo"
										<tr>
											<td><input id='ziyaretci' name='baslik$x' type='text' disabled='disabled' value='".$satir["baslik"]."' /></td>
											<td><input id='ziyaretci' name='mesaj$x' type='text' disabled='disabled' value='".$satir["mesaj"]."' /></td>
											<td><input id='ziyaretci' name='adsoyad$x' type='text' disabled='disabled' value='".$satir["adsoyad"]."' /></td>
											<td><input id='ziyaretci' name='tarih$x' type='text' disabled='disabled' value='".$satir["tarih"]."' /></td>
											<td><input id='ziyaretci' type='submit' value='ONAYLA' name='btn$x' /></td>
												
												";
										if(@$_POST["btn".$x]=="ONAYLA")
										{
											$ekle=mysql_query("update ziyaretci set onay=1 where id=".$satir["id"]);
											if($ekle)
											header("refresh:0;");
										}
										
										$x++;
										}
										
												
							?>
                        </table>
               
                	
                    </td>
                 </tr>
                <tr>
                    <td>
                    
                    	<table id="admintable">
            		<tr>
                		<th colspan="2"  id="baslik">GÜNÜN FİLMİ</th>
                	</tr>
                    <tr>
                		<td>FİLM TÜRÜ:</td>
                        	<td>
                            	<select name="kategori2">
                                	<?php
									//*************************GÜNÜN FİLMİ**************************
                        				$sql=mysql_query("select * from kategoriler");
										while($satir=mysql_fetch_array($sql))
										{
											echo"<option value='".$satir["kategori_adi"]."'>".$satir["kategori_adi"]."</option>";				
										}
									?>
                                </select><input type="submit" value="OK" />
                        	</td>
                	</tr>
                    <tr>
                		<td>FİLM ADI:</td>
                        	<td>
                            	<select name="filmadi">
                                	<?php
                        				$kategori=$_POST["kategori2"];
										$sql=mysql_query("select * from filmler where kategori_adi='$kategori'");
										while($satir=mysql_fetch_array($sql))
										{
											if($satir['onerilen']==1)
												echo"<option value='".$satir["film_id"]."' selected='selected'>".$satir["film_adi"]."</option>";
											else
												echo"<option value='".$satir["film_id"]."'>".$satir["film_adi"]."</option>";
										}
										
									?>
                                </select>
                                </td>
                            </tr>
                            <tr>
                            	<th colspan="2">
								<?php
									if(@$_POST["gununfilmi"]=="AYARLA")
										{
											$filmid=$_POST["filmadi"];
											$ekle=mysql_query("update filmler set onerilen=1 where film_id=$filmid");
											$ekle2=mysql_query("update filmler set onerilen=0 where film_id!=$filmid");
											
					
											if($ekle and $ekle2)
												{
													echo"FİLM SEÇİLDİ ";
												}
											else
					
												echo"kayit islemi basarisiz";
			
										}
									//*************************GÜNÜN FİLMİ SONU**************************
                                   
								?>
                        	</th>
                	</tr>
                	<tr>
                		<td colspan="2"><input type="submit" name="gununfilmi" value="AYARLA" style="width:100%; padding:3px;" /></td>
                	</tr>
            	</table>
                    
                    </td>
                    <td>
                    
                    	<table id="admintable">
            		<tr>
                		<th colspan="2"  id="baslik">FİLM SİLME</th>
                	</tr>
                    <tr>
                		<td>FİLM TÜRÜ:</td>
                        	<td>
                            	<select name="kategori2">
                                	<?php
									//*************************GÜNÜN FİLMİ**************************
                        				$sql=mysql_query("select * from kategoriler");
										while($satir=mysql_fetch_array($sql))
										{
											echo"<option value='".$satir["kategori_adi"]."'>".$satir["kategori_adi"]."</option>";				
										}
									?>
                                </select><input type="submit" value="OK" />
                        	</td>
                	</tr>
                    <tr>
                		<td>FİLM ADI:</td>
                        	<td>
                            	<select name="silinecekadi">
                                	<?php
                        				$kategori=$_POST["kategori2"];
										$sql=mysql_query("select * from filmler where kategori_adi='$kategori'");
										while($satir=mysql_fetch_array($sql))
										{
											if($satir['onerilen']==1)
												echo"<option value='".$satir["film_id"]."' selected='selected'>".$satir["film_adi"]."</option>";
											else
												echo"<option value='".$satir["film_id"]."'>".$satir["film_adi"]."</option>";
										}
										
									?>
                                </select>
                                </td>
                            </tr>
                            <tr>
                            	<th colspan="2">
								<?php
									if(@$_POST["filmisil"]=="SİL")
										{
											$silme=$_POST["silinecekadi"];
											$sil=mysql_query("select * from filmler where film_id=$silme");
										   $satir=mysql_fetch_array($sil);
											@unlink($satir['resim']);
											@unlink($satir['gununfilmikapak']);
											$sil=mysql_query("delete from filmler where film_id=$silme");
											
					
											if($sil)
												{
													echo"FİLM SİLİNDİ!";
												}
											else
					
												echo"SİLME İŞLEMİ BAŞARISIZ!";
			
										}
									//*************************GÜNÜN FİLMİ SONU**************************
                                   
								?>
                        	</th>
                	</tr>
                	<tr>
                		<td colspan="2"><input type="submit" name="filmisil" value="SİL" style="width:100%; padding:3px;" /></td>
                	</tr>
            	</table>
                    
                    </td>
                </tr>
                <tr>
                	
                </tr><tr>
                	<td colspan="2">
            	
                    	<table id="admintable" style="width:620px;">
                        <TR><TH  colspan="5" id="baslik">ÜYE KONTROLÜ</TH></TR>
                        	<tr>
                            	<th>Üye Adı</th><th>E-Posta</th><th>Durum</th><th>Geçen Süre</th><th>Tarih</th>
                            </tr>
                            	<?php
									$sql=mysql_query("select * from kullanici");
										$x=0;
										while($satir=mysql_fetch_array($sql))
										{
										
										echo"<tr>";
										if(@$_POST["btnduzenle".$x]=="DÜZENLE")
										{
												echo"
											<td><input id='kullanici' name='uyeadi$x' type='text' value='".$satir["uye_adi"]."' /></td>
											<td><input id='kullanici' name='eposta$x' type='text' value='".$satir["e_posta"]."' /></td>
											<td><input id='kullanici' name='durum$x' type='text' value='".$satir["durum"]."' /></td>
											<td><input id='kullanici' name='gecensure$x' type='text'  value='".$satir["gecmis_sure"]."' /></td>
											<td><input id='kullanici' name='tarih$x' type='text' value='".$satir["uyelik_tarihi"]."' /></td>";
										}
										else
										{
											echo"
											<td><input id='kullanici' name='uyeadi$x' type='text' disabled='disabled' value='".$satir["uye_adi"]."' /></td>
											<td><input id='kullanici' name='eposta$x' type='text' disabled='disabled' value='".$satir["e_posta"]."' /></td>
											<td><input id='kullanici' name='durum$x' type='text' disabled='disabled' value='".$satir["durum"]."' /></td>
											<td><input id='kullanici' name='gecensure$x' type='text' disabled='disabled' value='".$satir["gecmis_sure"]."' /></td>
											<td><input id='kullanici' name='tarih$x' type='text' disabled='disabled' value='".$satir["uyelik_tarihi"]."' /></td>";
											
										}
											echo"
											<td><input id='kullanici' type='submit' value='DÜZENLE' name='btnduzenle$x' /></td>
											<td><input id='kullanici' type='submit' value='GÜNCELLE' name='btnguncelle$x' /></td>
											<td><input id='kullanici' type='submit' value='SİL' name='btnsil$x' /></td>
												
												";
										if(@$_POST["btnsil".$x]=="SİL")
										{
											$ekle=mysql_query("delete from kullanici where uye_id=".$satir["uye_id"]);
											if($ekle)
											header("refresh:0;");
										}
										
										if(@$_POST["btnguncelle".$x]=="GÜNCELLE")
										{
											$kadi=$_POST['uyeadi'.$x];
											$mail=$_POST['eposta'.$x];
											$durum=$_POST['durum'.$x];
											$gs=$_POST['gecensure'.$x];
											$tarih=$_POST['tarih'.$x];
											$ekle=mysql_query("update kullanici set uye_adi='$kadi' , e_posta='$mail' , durum='$durum' , gecmis_sure=$gs , uyelik_tarihi='$tarih' where uye_id=".$satir["uye_id"]."");
											if($ekle)
											{
												echo"<script>alert('helal sanaaa');</script>";
												header("refresh:0;");
											}
											else
												echo"<script>alert('eziiik');</script>";
										}
										
										$x++;
										}
										
												
							?>
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