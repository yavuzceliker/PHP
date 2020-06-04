<?php
header("Content-Type:image/png");
header("refresh:0.1");
$resim=imagecreatetruecolor(600,600);
$kirmizi=imagecolorallocate($resim,rand(1,255),rand(1,255),rand(1,255));
$sari=imagecolorallocate($resim,rand(1,255),rand(1,255),rand(1,255)	);
imagefill($resim,0,0,$kirmizi);
//dikdortgen veya kare  cizme 
imagefilledrectangle($resim,150,250,250,350,$sari);
imagefilledrectangle($resim,250,250,350,350,$sari);
imagefilledrectangle($resim,350,250,450,350,$sari);
imagefilledrectangle($resim,250,150,350,250,$sari);
	imagefilledrectangle($resim,250,350,350,450,$sari);
imagepng($resim);
imagedestroy($resim);

?>