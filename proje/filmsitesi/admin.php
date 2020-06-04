23<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	$sql=mysql_query("select * from kullanici where uye_adi='".$_SESSION['oturumacan']."'");
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
body{background:url(images/bbg.jpg)fixed;}
</style>
<body>
<form method="post" enctype="multipart/form-data">
	<div id="container">
		
            <table id="admin">
            	
                 <tr>
                    <td id="guncelle">
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
		header('location:#guncelle;');
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
                    <td id="filmekle">
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
					header('location:#filmekle;');
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
                        	<tr >
                            	<th>Başlık</th><th>Mesaj</th><th>Gönderen</th><th>Tarih</th>
                            </tr>
                            	<?php
									$sql=mysql_query("select * from ziyaretci where onay=0 order by tarih desc LIMIT 10");
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
											header("location:#ziyaretci","refresh:0;");
										
											header('location:#ziyaretci;');
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
											header('location:#gununfilmi;');
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
                	<tr id="gununfilmi">
                		<td colspan="2"><input type="submit" name="gununfilmi" value="AYARLA" style="width:100%; padding:3px;" /></td>
                	</tr>
            	</table>
                    
                    </td>
                    <td>
                    
                    	<table id="admintable">
            		<tr>
                		<th colspan="2"  id="baslik">FİLM SİLME</th>
                	</tr>
                    <tr id="filmisil">
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
											header('location:#filmisil;');
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
                        <TR id="uyekontrol"><TH  colspan="7" id="baslik">ÜYE KONTROLÜ</TH>
                        	<td>
                            <input type="submit" name="ikili" style="
                   <?php
                   if(@$_POST["ikili"]==" ")
				    {
						$_SESSION["kacadet"]--;
						if($_SESSION["kacadet"]<=3)
						$_SESSION["kacadet"]=3;
						
						echo"float:right; width:27px;height:27px; border:none;background:url(images/bbgh.jpg) no-repeat;";
						header('location:#uyekontrol;');	
						
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
						header('location:#uyekontrol;');
				    	
						echo"float:right; width:27px;height:27px; border:none;background:url(images/cbbgh.jpg) no-repeat;";
				    }
					else
					{
						echo"float:right; width:27px;height:27px; border:none;background:url(images/cbbg.jpg) no-repeat;";
					}
				   	?>
                    " value=" "/>
                            </td>
                        
                        </TR>
                        	<tr>
                            	<th>Üye Adı</th><th>E-Posta</th><th>Durum</th><th>Geçen Süre</th><th>Tarih</th>
                            </tr>
                            	<?php
$kacadet=$_SESSION["kacadet"];
@$sayfa=$_GET["sayfa"];
if(empty($sayfa)) $sayfa=1;
$baslangic=($sayfa-1)*$kacadet;

$sql=mysql_query("select * from kullanici limit $baslangic,$kacadet");
										$x=0;
										while($satir=mysql_fetch_array($sql))
										{
										
										echo"<tr>";
										if(@$_POST["btnduzenle".$x]=="DÜZENLE")
										{
											header('location:#uyekontrol;');
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
											header('location:#uyekontrol');
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
												header('location:#uyekontrol');
											}
											else
												echo"<script>alert('eziiik');</script>";
										}
										
										$x++;
										}
										
												
							?>
                            <tr>
                            	<td colspan="8">
                                
					<?php

if(@$_GET['sayfa'])
	null;
else 
	$_GET['sayfa']=1;

$sql=mysql_query("select * from kullanici");
$kayitsayisi=mysql_num_rows($sql);
$sayfasayisi=ceil($kayitsayisi/$kacadet);
$sonuclu=$sayfasayisi-3;
echo "<div id='sayfalama'><div style=text-align:center;>";
if($_GET['sayfa']>$sayfasayisi)
{
	$_GET['sayfa']=$sayfasayisi;
}
else if($_GET['sayfa']<1)
	 $_GET['sayfa']=1;
if($_GET['sayfa']!=1)
{
	echo"<a id='numara' href='?sayfa=1#uyekontrol'><<</a>";
	echo"<a id='numara' href='?sayfa=".($_GET['sayfa']-3)."#uyekontrol'><</a>";
}
for($i=$_GET['sayfa'];$i<=$sayfasayisi;$i++)
{
if($i<=($_GET['sayfa']+2))
	{
	if($_GET['sayfa']==$i)
		echo "<a id='numara' style='color:red;' href=?sayfa=".$i."#uyekontrol>".$i."</a>";	
	else
		echo "<a id='numara' href=?sayfa=".$i."#uyekontrol>".$i."</a>";	
	}
else if($i>=$sonuclu)
	echo "<a id='numara' href=?sayfa=".$i."#uyekontrol>".$i."</a>";
else
	{echo" ...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "; $i=$sonuclu;}
}

if($_GET['sayfa']!=$sayfasayisi)
{
	echo"<a id='numara' href='?sayfa=$sayfasayisi'#uyekontrol>>></a>";
	echo"<a id='numara' href='?sayfa=".($_GET['sayfa']+3)."#uyekontrol'>></a>";
}
	
echo"</div></div>";

				   ?>
                                </td>
                            </tr>
                        </table>
               
                	
                    </td>
                 </tr>
<tr>                <td id="anketekle">
                    	                <table id="admintable">
            		<tr>
                		<th colspan="2" id="baslik">ANKET EKLEME</th>
                	</tr>
                	<tr>
                		<td>SORU:</td><td><input type="text" name="soru" /></td>
                	</tr>
                	<tr>
                		<td>1.CEVAP</td><td><input type="text" name="cevap" /></td>
                	</tr>
                	<tr>
                		<td>2.CEVAP</td><td><input type="text" name="cevap1" /></td>
                	</tr>
                	<tr>
                		<td>3.CEVAP</td><td><input type="text" name="cevap2" /></td>
                	</tr>
                	<tr>
                		<td>4.CEVAP</td><td><input type="text" name="cevap3" /></td>
                	</tr>
                	<tr>
                		<td>5.CEVAP</td><td><input type="text" name="cevap4" /></td>
                	</tr>
                	<tr>
                		<td>DURUM:</td><td><input type="text" name="durum"/></td>
                	</tr>
               	<tr>
                		<td colspan="2"><input type="submit" name="anketekle" value="ANKET EKLE" style="width:100%; padding:3px;" /></td>
                	</tr>
                    
<?php
			if(@$_POST["anketekle"]=="ANKET EKLE")
			{
					header('location:#anketekle;');
					$soru=$_POST["soru"];
					$cevap=$_POST["cevap"];
					$cevap1=$_POST["cevap1"];
					$cevap2=$_POST["cevap2"];
					$cevap3=$_POST["cevap3"];
					$cevap4=$_POST["cevap4"];
					$durum=$_POST["durum"];
					$tarih=date("d.m.Y");
					
					
					if($soru=="" or $cevap=="" or $cevap1=="" or $cevap2=="" or $cevap3=="" or $cevap4="")
						echo"<script> alert('BOŞ GEÇMEYİNİZ');</script>";
					else
					{
						$ekle=mysql_query("insert into anket(soru,cevap,cevap1,cevap2,cevap3,cevap4,tarih,durum)
values('$soru','$cevap','$cevap1','$cevap2','$cevap3','$cevap4','$tarih','$durum')");
					
						echo"<tr><th colspan='2'>KAYIT EKLENDİ!</th></tr>";
					}
			
			}
			?>
            	</table>

                    </td>
<td>
                    
                    	<table id="admintable">
            		<tr>
                		<th colspan="2"  id="baslik">ANKET SEÇ</th>
                	</tr>
                    <tr>
                		<td>FİLM ADI:</td>
                        	<td id="anketsec">
                            	<select name="anketsec">
                                	<?php
										$id=0;
										$sql=mysql_query("select * from anket");
										while($satir=mysql_fetch_array($sql))
										{
											echo"<option value='".$satir["id"]."'>".$satir["soru"]."</option>";
										}
										
									?>
                                </select>
                                </td>
                            </tr>
                            <tr>
                            	<th colspan="2">
								<?php
									if(@$_POST["anketsecbtn"]=="AYARLA")
										{
											$id=$_POST['anketsec'];
											$ekle=mysql_query("update anket set durum=1 where id=$id");
											$ekle2=mysql_query("update anket set durum=0 where id!=$id");
											
					
											if($ekle and $ekle2)
												{
													echo"<script>alert('ANKET SEÇİLDİ');</script> ";
												}
											else
					
												echo"<script>alert('SEÇİM HATASI!');</script>";
			
											
											header('location:#anketsec;');
										}
									//*************************ANKET EKLEME SONU**************************
                                   
								?>
                        	</th>
                	</tr>
                	<tr>
                		<td colspan="2"><input type="submit" name="anketsecbtn" value="AYARLA" style="width:100%; padding:3px;" /></td>
                	</tr>
            	</table>
                    
                    </td>
                    </tr>
            </table>
      	</div>
        <div style="background:#666; position:fixed; z-index:2; margin:-1040px 0 0 0;">
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



</div>

    </div>
    <?php ob_end_flush();?>
</form>
</body>
</html>