<?php
header("Content-Type:image/png");

$resim=imagecreatetruecolor(600,600);
$asd=imagecolorallocate($resim,rand(1,255),rand(1,255),rand(1,255));
$kirmizi=imagecolorallocate($resim,255,0,0);
$sari=imagecolorallocate($resim,rand(1,255),rand(1,255),rand(1,255));
imagefill($resim,0,0,$asd);
$n=1;
$m=90;
$y=117;
	$k=244;
     $r=119;
	 $l=249;
	
//Daire cizme

	imagefilledellipse($resim,150,150,200,200,$sari);
	imagefilledellipse($resim,280,150,200,200,$sari);
	imageline($resim,110,240,210,340,$sari); 
	imageline($resim,315,244,210,340,$sari); 
		imagefilledrectangle($resim,115,243,118,248,$sari);
		imagefilledrectangle($resim,116,244,119,249,$sari);
		while($n<=$m)
{
	
	
   imagefilledrectangle($resim,$y,$k,$r,$l,$sari);
   $n++;
   $y++;
	$k++;
     $r++;
	 $l++;
	
}
$y=117;
	$k=244;
     $r=119;
	 $l=249;
	
		while($n<=$m)
{
	
	
   imagefilledrectangle($resim,$y,$k,$r,$l,$sari);
   $n++;
   $y++;
	$k++;
     $r++;
	 $l++;
	
}
		
imagepng($resim);
   imagedestroy($resim);

?>