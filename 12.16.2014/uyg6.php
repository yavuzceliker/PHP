<?php
header("Content-Type:image/png");
header("refresh:0.1");
$resim=imagecreatetruecolor(600,600);
$asd=imagecolorallocate($resim,rand(1,255),rand(1,255),rand(1,255));
$kirmizi=imagecolorallocate($resim,255,0,0);
$sari=imagecolorallocate($resim,255,255,0);
imagefill($resim,0,0,$asd);
//Daire cizme
imagefilledellipse($resim,300,300,250,250,$kirmizi);
imagepng($resim);
imagedestroy($resim);
?>