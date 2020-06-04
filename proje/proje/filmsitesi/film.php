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
	$sql=mysql_query("select * from filmler where film_id='".$_GET["filmid"]."'");
	$sql2=mysql_query("update filmler set izlenme=izlenme+1 where film_id='".$_GET["filmid"]."'");
	$satir=mysql_fetch_array($sql);
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
		<table id="admintable">
        	<tr>
            	<td><input type="submit" name="btn1" id="btn" value="asdasd" /></td>
            	<td><input type="submit" name="btn1" id="btn" value="asdasd" /></td>
            	<td><input type="submit" name="btn1" id="btn" value="asdasd" /></td>
            	<td><input type="submit" name="btn1" id="btn" value="asdasd" /></td>
            </tr>
            <tr>
            	<td colspan="4">
                	<div id="player">
                    	<div id="gec">
    <iframe src='http://videoapi.my.mail.ru/videos/embed/mail/olegstrug/_myvideo/1.html' width='800' height='450' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                		</div>
                    </div>
				</td>
            </tr>
            <tr>
            	<td>
                	<table>
                    	<tr>
                        	<td colspan="" rowspan="4"><img src="<?php echo $satir['resim']; ?>" width="130" height="200" /></td>
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