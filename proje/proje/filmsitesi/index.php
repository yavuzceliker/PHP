<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FİLM SİTESİ VER 1.0</title>
</head>
<style> 
<?php
session_start();
 include("baglan.php");
 $sql=mysql_query("select * from filmler where onerilen=1"); 
 $satir=mysql_fetch_array($sql);
 ?>
*{margin:0 auto; padding:0;}
body{background:url(<?php echo $satir['gununfilmikapak'] ; ?>)no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;}
#container{
	width:1000px;
	height:500px;
	}

body>img{ width:100%; position:absolute; z-index:-1; height:100%;}

#sis{background:url(images/nohta.png); height:auto;}

#gecbtn{ border:none;background:#777; color:orange; text-align:center; padding:6px; font-family:Corben; position:absolute; margin:30px 0 0 -150px;}

#youtube{
	padding:13% 8% 0 0;
		width:500px;}

</style>
<body>
<img src="images/nohta.png" />
	<form method="post">
    	<div id="is">
        	<div id="container">
                <div id="youtube">
                    <div id="gec"><input type="submit" name="gec" id="gecbtn" value="FİLMLERE GEÇ" /></div>
                    	<iframe src="http://www.youtube.com/embed/<?php       echo $satir['trailer'];     ?>?autoplay=1" width="560" height="400" frameborder="0"
                    	allowfullscreen="allowfullscreen"></iframe>
                </div>
        	</div>
    	</div>
        <?php
		
 $_SESSION["kacadet"]=3;
		if(@$_POST["gec"]=="FİLMLERE GEÇ")
		{
			header("location:anasayfa.php");
		}
		?>
    </form>
</body>
</html>