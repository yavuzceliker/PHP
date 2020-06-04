<?php
header("Content-Type:image/png");
header("refresh:0.1");
$resim=imagecreatetruecolor(600,600);
$asd=imagecolorallocate($resim,rand(1,255),rand(1,255),rand(1,255));

$sari=imagecolorallocate($resim,rand(1,255),rand(1,255),rand(1,255));
imagefill($resim,0,0,$asd);
$n=1;
$m=1000;
//Daire cizme
while($n<=$m)
{
	$kirmizi=imagecolorallocate($resim,rand(1,255),rand(1,255),rand(1,255));
	$y=rand(1,600);
	$k=rand(1,600);
$r=rand(1,30);
	imagefilledellipse($resim,$y,$k,$r,$r,$kirmizi);
   
   $n++;
}
imagepng($resim);
   imagedestroy($resim);

?>