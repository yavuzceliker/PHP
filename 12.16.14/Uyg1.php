<?php
		header("Content-Type:image/png");
		header("refresh:0.01");
		//imagecreatetruecolor(genişlik,yükseklik);
		$resim=imagecreatetruecolor(rand(0,855),rand(0,855));
		//imagecolorallocate(Çalışma Alanı,R,G,B);
		$kirmizi=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		$sari=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		//Kırmızıyı arkaplan olarak ayarlayalım
		imagefill($resim,0,0,$kirmizi);
		//çalışma alanını görme
		imagepng($resim);
		//resmi bellekten sil
		imagedestroy($resim);
?>