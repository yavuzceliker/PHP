<?php
header("Content-Type:image/png");
header("refresh:0.1");
$resim=imagecreatetruecolor(600,600);
$asd=imagecolorallocate($resim,rand(1,255),rand(1,255),rand(1,255));
$kirmizi=imagecolorallocate($resim,255,0,0);
$sari=imagecolorallocate($resim,255,255,0);
imagefill($resim,0,0,$asd);
//dikdortgen veya kare  cizme
$t=10;
$d=590; 
$a=1;
$b=27;
while($a<=$b)
{
	
	if($a%2==0)
	{$renk=imagecolorallocate($resim,255,0,0);}
	else
	{$renk=imagecolorallocate($resim,255,255,0);}
	
	imagefilledrectangle($resim,$t,$t,$d,$d,$renk);
	$t=$t+10;
     $d=$d-10;
	 $a++;
}

imagepng($resim);
imagedestroy($resim);
?>