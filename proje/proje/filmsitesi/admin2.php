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
<form method="post" enctype="multipart/form-data">
	<div id="container">
		
            <table id="admin">
            	
                 <tr>
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
				for($x=0; $x<=600; $x++)
					{
					$film_adi=$_POST["film_adi"]." ".$x;
					$trailer=$_POST["trailer"];
					$imdb=$_POST["imdb"];
					$kategori=$_POST["kategori"];
			  		
					
					
					
					$filmkapak="images/filmkapak/".$x.$_FILES['filmkapak']['name'];
			  		$filmbg="images/filmbg/".$x.$_FILES['filmbg']['name'];
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
					
						echo"<tr><th colspan='2'>KAYIT EKLENDİ! $x</th></tr>";
					}
			
			}$x++;
			}
			//********************************** FİLM EKLEME SONU*************************
			?>
            	</table>

                    </td>
                </tr>
                    </td>
                 </tr>
            </table>
      	</div>
    </div>
    <?php ob_end_flush();?>
</form>
</body>
</html>