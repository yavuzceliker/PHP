<?php
header("Content-Type:image/png");
header("refresh:0.1");

$resim=imagecreatetruecolor(500,500);
$red=imagecolorallocate($resim,255,0,0);
$blue=imagecolorallocate($resim,0,0,255);
imagefill($resim,0,0,$blue);
$basla=330;
$bitis=90;
for($i=0;$i<=3;$i++)
{
$green=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
imagefilledarc($resim,250,250,500,500,$basla,$bitis,$green,4);
$basla=$basla+120;
$bitis=$bitis+120;
}


imagepng($resim);
imagedestroy($resim);
?>