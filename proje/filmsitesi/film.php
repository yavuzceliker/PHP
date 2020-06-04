<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MOVIECLUB</title>
<link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
<script type="text/javascript">
	$player=0;
	$hakkinda=0;
	$(function(){
		$('#filmbtn').click(function(){
			$('#trailerac').hide('slow');
			$('#filmbilgi').show('slow');
			$('#hakkindaac').hide('slow');
			$('#playerac').show('slow');
		});
		$('#trailer').click(function(){
			$('#trailerac').show('slow');
			$('#filmbilgi').show('slow');
			$('#playerac').hide('slow');
			$('#hakkindaac').hide('slow');
		});
		$('#hakkinda').click(function(){
			$('#hakkindaac').show('slow');
			$('#trailerac').hide('slow');
			$('#playerac').hide('slow');
			$('#filmbilgi').hide('slow');;
		});
	});

</script>

</head>
<?php
	session_start();
	ob_start();
	include("baglan.php");
	$sql=mysql_query("select * from filmler where film_id='".$_GET["filmid"]."'");
	$sql2=mysql_query("update filmler set izlenme=izlenme+1 where film_id='".$_GET["filmid"]."'");
	$satir=mysql_fetch_array($sql);
?>
<style>
#container{background:none; border:none; box-shadow:none;}
body{background:url(images/bbg.jpg); background-attachment:fixed;}
	#afis{margin:10px; border-radius:10px;}
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
		<table id="admintable">
        	<tr>
            	<td colspan="4" style="text-align:center;">
					<input type="button" id="filmbtn" value="FİLM"/>
					<input type="button" id="trailer" value="TRAİLER"/>
					<input type="button" id="hakkinda" value="HAKKINDA"/>
                </td>
            </tr>
            <tr id="playerac">
            	<td colspan="4">
                	<div id="player">
                    	<div id="gec">
    <iframe 
    src='<?php echo $satir["yol"];?>' width='800' height='450' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                		</div>
                    </div>
                </td>
            </tr>
            
            <tr id="trailerac" style="display:none;">
            <td colspan='4'><div id='player'><div id='gec'><iframe src='http://www.youtube.com/embed/<?php echo $satir["trailer"];?>' width='800' height='450' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div></div></td>
            </tr>
            <tr id="hakkindaac" style="display:none;">
            <td colspan='4'>
            	<table border='5'  style="width:800px;">
                	<tr>
                    	<td rowspan='3'><img id='afis' src='images/filmkapak/ye2.jpg' width='145' height='200'/></td>
                    				<th colspan='3'  style="width:500px;"><?php echo $satir["film_adi"];?></th>
                    </tr>
                    <tr>
                    	<td>Yönetmenler:</td>
                        <td colspan='2'><?php echo $satir["yonetmen"];?></td>
                    </tr>
                    <tr>
                    	<td>Oyuncular:</td>
                        <td colspan='2'><?php echo $satir["oyuncular"];?></td>
                    </tr>
                    <tr><td colspan='3'><br /><h2>ÖZET</h2><br /><?php echo $satir["aciklama"];?></td>
                    </tr>
                </table>
            </td>
            </tr>
            <tr id="filmbilgi">
            	<td>
                	<table>
                    	<tr>
                        	<td colspan="" rowspan="5"><img id='afis' src="<?php echo $satir['resim']; ?>" width="130" height="200" /></td>
                        	<th colspan="2"><?php echo $satir['film_adi']; ?></th>
                        </tr>
                    	<tr>
                        	<td>FİLM KATEGORİSİ</td><td><?php echo $satir['kategori_adi']; ?></td>
                        </tr>
                    	<tr>
                        	<td>İZLENME</td><td><?php echo $satir['izlenme']; ?></td>
                        </tr>
                    	<tr>
                        	<td>EKLENME TARİHİ</td><td><?php echo $satir['tarih']; ?></td>
                        </tr>
                    	<tr>
                        	<td colspan="3">AÇIKLAMA:<br /><?php echo $satir['aciklama']; ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

    </div>
    <?php ob_end_flush();?>
</form>
</body>
</html>