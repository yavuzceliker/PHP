<?php
	header("Content-Type:image/png");
	$resim=imagecreatetruecolor(600,600);
	$col1=imagecolorallocate($resim,255,255,0);
	$col2=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
	$col3=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
	imagefill($resim,0,0,$col1);
		
		imagefilledellipse($resim,300,300,400,400,$col2);
		imagestring($resim,300,300,300,"DENEME",$col3);
	imagepng($resim);
	imagedestroy($resim);
?>