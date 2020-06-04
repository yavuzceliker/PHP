<?php
		header("Content-Type:image/png");
		header("refresh:0.1");
		//imagecreatetruecolor(genişlik,yükseklik);
		$resim=imagecreatetruecolor(rand(0,855),rand(0,855));
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
		imagefilledrectangle($resim,rand(0,55),rand(0,55),rand(0,55),rand(0,55),$kirmizi);
		imagefilledrectangle($resim,rand(0,155),rand(0,155),rand(0,155),rand(0,155),$sari);
		imagefilledrectangle($resim,rand(0,255),rand(0,255),rand(0,255),rand(0,255),$kirmizi1);
		imagefilledrectangle($resim,rand(0,355),rand(0,355),rand(0,355),rand(0,355),$sari1);
		imagefilledrectangle($resim,rand(0,445),rand(0,455),rand(0,455),rand(0,455),$kirmizi2);
		imagefilledrectangle($resim,rand(0,555),rand(0,555),rand(0,555),rand(0,555),$sari2);
		imagefilledrectangle($resim,rand(0,655),rand(0,655),rand(0,655),rand(0,655),$kirmizi3);
		imagefilledrectangle($resim,rand(0,755),rand(0,755),rand(0,755),rand(0,755),$sari3);
		imagefilledrectangle($resim,rand(0,855),rand(0,855),rand(0,855),rand(0,855),$kirmizi4);
		imagefilledrectangle($resim,rand(0,955),rand(0,955),rand(0,955),rand(0,955),$sari4);
		imagepng($resim);
		imagedestroy($resim);
?>