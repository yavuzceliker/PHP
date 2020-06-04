<?php
		header("Content-Type:image/png");
		header("refresh:0.0001");
		//imagecreatetruecolor(genişlik,yükseklik);
		$resim=imagecreatetruecolor(1200,1200);
		//imagecolorallocate(Çalışma Alanı,R,G,B);
		$kirmizi=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		$sari=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		$kirmizi1=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		$sari1=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		$kirmizi2=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		$sari2=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		$kirmizi3=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		$sari3=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		$kirmizi4=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		$sari4=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		//Kırmızıyı arkaplan olarak ayarlayalım
		imagefill($resim,0,0,$kirmizi);
		
		//dikdortgen or kare
		imagefilledrectangle($resim,500,300,700,500,$kirmizi1);
		imagefilledrectangle($resim,300,500,500,700,$kirmizi1);
		imagefilledrectangle($resim,700,500,500,700,$kirmizi1);
		imagefilledrectangle($resim,700,500,900,700,$kirmizi1);
		imagefilledrectangle($resim,700,700,500,900,$kirmizi1);
		imagepng($resim);
		imagedestroy($resim);
?>