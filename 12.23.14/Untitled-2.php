<?php
header("Content-Type:image/png");
header("refresh:0.1");
$resim=imagecreatetruecolor(800,800);
$mavi=imagecolorallocate($resim,0,0,255);
imagefill($resim,0,0,$mavi);
	$c=0;
	$y=10;
for($x=1;$x<=36;$x++)
{

	$kirmizi=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
	imagefilledarc($resim,400,400,1200,1200,$c,$y,$kirmizi,0);//pasta dilimi
	$y=$y+10;
	$c=$c+10;

}
imagepng($resim);
imagedestroy($resim);
?>