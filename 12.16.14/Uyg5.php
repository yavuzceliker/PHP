<?php
		header("Content-Type:image/png");
		header("refresh:0.005");
		//imagecreatetruecolor(genişlik,yükseklik);
		$resim=imagecreatetruecolor(1000,1000);
		//imagecolorallocate(Çalışma Alanı,R,G,B);
		$kirmizi=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		//Kırmızıyı arkaplan olarak ayarlayalım
		imagefill($resim,0,0,$kirmizi);
		$s1=rand(10,11);
		//dikdortgen or kare
		for($a=1;$a<=1110;$a++)
		{
		$s=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		imagefilledellipse($resim,rand(0,1000),rand(0,1000),$s1,$s1,$s);
		}	
		imagepng($resim);
		imagedestroy($resim);
?>