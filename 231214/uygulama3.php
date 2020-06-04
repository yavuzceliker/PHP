<?php
header("Content-Type:image/png");
header("refresh:0.1");

$resim=imagecreatetruecolor(400,400);
$red=imagecolorallocate($resim,255,255,0);
$blue=imagecolorallocate($resim,0,0,0);
imagefill($resim,0,0,$blue);
$green=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
$yazitipi="ALGER.TTF";
$yazi="sirinbabeeyyy";

$a=rand(0,50);
for($i=0;$i<=20;$i++)
{
//imagettftext($resim,15,rand(0,360),rand(0,360),rand(0,360),$green,$yazitipi,$yazi);
imageline($resim,rand(0,360),rand(0,360),rand(0,360),rand(0,360),rand(0,999999));

$a=$a+30;
}

imagepng($resim);
imagedestroy($resim);
?>