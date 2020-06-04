<?php
	header("Content-Type:image/png");
	$resim=imagecreatetruecolor(600,600);
	$col1=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
	$col2=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
	$col3=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
	imagefill($resim,0,0,$col1);
		
		//imagefilledrectangle($resim,100,100,500,500,$col2);
		/*imagestring($resim,5,120,300,"DENEME",$col3);
		imagestring($resim,5,300,300,"yav hehe",$col3);
		*/
		
		for($i=0;$i<=2;$i++)
		{
			$col3=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
			imagefilledarc($resim,300,300,300,300,180,270,$col2,1);
			imageline($resim,0,300,350,300,$col3);
		}
		
	imagepng($resim);
	imagedestroy($resim);
?>