<?php
header("Content-Type:image/png");
header("refresh:0.1");
$resim=imagecreatetruecolor(600,600);
$asd=imagecolorallocate($resim,rand(1,255),rand(1,255),rand(1,255));
$kirmizi=imagecolorallocate($resim,255,0,0);
$sari=imagecolorallocate($resim,255,255,0);
imagefill($resim,0,0,$asd);
//dikdortgen veya kare  cizme 
imagefilledrectangle($resim,100,100,500,500,$sari);
imagefilledrectangle($resim,120,120,480,480,$kirmizi);
imagefilledrectangle($resim,140,140,460,460,$sari);
imagefilledrectangle($resim,160,160,440,440,$kirmizi);
imagefilledrectangle($resim,180,180,420,420,$sari);
imagefilledrectangle($resim,200,200,400,400,$kirmizi);
imagefilledrectangle($resim,220,220,380,380,$sari);
imagepng($resim);
imagedestroy($resim);

?>