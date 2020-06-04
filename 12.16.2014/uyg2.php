<?php
header("Content-Type:image/png");
header("refresh:0.1");
$resim=imagecreatetruecolor(600,600);
$kirmizi=imagecolorallocate($resim,255,0,0);
$sari=imagecolorallocate($resim,rand(1,255),255,0);
imagefill($resim,0,0,$kirmizi);
//dikdortgen veya kare  cizme 
imagefilledrectangle($resim,0,0,600,600,$sari);
imagepng($resim);
imagedestroy($resim);

?>
