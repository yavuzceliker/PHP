<?php
header("Content-Type:image/png");
//header("refresh:0.1");
$resim=imagecreatetruecolor(800,800);
$mavi=imagecolorallocate($resim,255,0,0);
$sari=imagecolorallocate($resim,255,255,0);
imagefill($resim,0,0,$mavi);
	$c=0;
	$y=10;
for($x=1;$x<=36;$x++)
{
    imagefilledarc($resim,400,400,300,300,0,360,$sari,0);//pasta dilimi
	$kirmizi=imagecolorallocate($resim,0,0,0);
	 imagefilledarc($resim,400,400,250,250,0,60,$kirmizi,0);//pasta dilimi

	 imagefilledarc($resim,400,400,250,250,120,180,$kirmizi,0);//pasta dilimi
	 imagefilledarc($resim,400,400,250,250,240,300,$kirmizi,0);//pasta dilimi
	  imagefilledarc($resim,400,400,250,250,360,420,$kirmizi,0);//pasta dilimi
	  
	 imagefilledarc($resim,400,400,80,80,0,360,$sari ,0);//pasta dilimi
	 imagefilledarc($resim,400,400,50,50,0,360,$kirmizi ,0);//pasta dilimi
	$y=$y+10;
	$c=$c+10;

}
$yazitipi="herbiz.ttf";
$yazi="WARNING";
imagestring($resim,5,370,100,$yazi,$sari);
imagettftext($resim,50,0,260,160,$sari,$yazitipi,$yazi);
//imagepng($resim,"C:/Users/PC/Desktop/anan.png",6,1);
imagepng($resim);
imagedestroy($resim);
?>