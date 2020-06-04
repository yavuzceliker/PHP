<?php
header("Content-Type:image/png");
//header("refresh:0.1");

$resim=imagecreatetruecolor(500,500);
$red=imagecolorallocate($resim,255,255,0);
$blue=imagecolorallocate($resim,0,0,0);
imagefill($resim,0,0,$blue);
$green=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
imagefilledarc($resim,250,250,500,500,0,360,$red,4);
imagefilledarc($resim,250,250,450,450,60,120,$blue,4);
imagefilledarc($resim,250,250,450,450,180,240,$blue,4);
imagefilledarc($resim,250,250,450,450,300,360,$blue,4);
imagefilledarc($resim,250,250,100,100,0,360,$red,4);
imagefilledarc($resim,250,250,70,70,0,360,$blue,4);

imagepng($resim);
imagedestroy($resim);
?>