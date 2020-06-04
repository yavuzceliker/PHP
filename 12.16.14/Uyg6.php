<?php
		header("Content-Type:image/png");
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
		/*kafa*/ imagefilledellipse($resim,250,75,165,150,$kirmizi1);
		/*kafa*/imagefilledrectangle($resim,230,120,270,180,$kirmizi1);
		/*kafa*/imagefilledrectangle($resim,160,180,350,500,$kirmizi2);
		/*kafa*/imagefilledrectangle($resim,160,400,230,700,$kirmizi1);
		/*kafa*/imagefilledrectangle($resim,280,400,350,700,$kirmizi1);
		/*kafa*/imagefilledrectangle($resim,300,180,520,230,$kirmizi1);
		/*kafa*/imagefilledrectangle($resim,300,180,520,230,$kirmizi1);
		/*kafa*/imagefilledrectangle($resim,10,180,520,230, $kirmizi1);
		/*kafa*/imagefilledrectangle($resim,10,180,70,330,$kirmizi1);
		/*kafa*/imagefilledrectangle($resim,520,180,460,330,$kirmizi1);
		/*kafa*/imagefilledrectangle($resim,140,700,250,730,$kirmizi1);
		/*kafa*/imagefilledrectangle($resim,260,700,370,730,$kirmizi1);
		/*kafa*/imagefilledellipse($resim,210,60,20,20,$kirmizi2);
		/*kafa*/imagefilledellipse($resim,280,60,20,20,$kirmizi2);
		/*kafa*/imagefilledellipse($resim,245,90,20,30,$kirmizi4);
		/*kafa*/imagefilledellipse($resim,245,120,60,20,$kirmizi2);
		/*kafa*/imagefilledellipse($resim,245,40,80,10,$kirmizi2);
		/*kafa*/imagefilledellipse($resim,255,240,20,20,$kirmizi4);
		/*kafa*/imagefilledellipse($resim,255,280,20,20,$kirmizi4);
		/*kafa*/imagefilledellipse($resim,255,320,20,20,$kirmizi4);
		/*kafa*/imagefilledellipse($resim,255,360,20,20,$kirmizi2);
		/*sop1*/imagefilledellipse($resim,20,350,12,40,$kirmizi3);
		/*sop2*/imagefilledellipse($resim,32,350,12,40,$kirmizi3);
		/*sop3*/imagefilledellipse($resim,44,350,12,40,$kirmizi3);
		/*sop4*/imagefilledellipse($resim,56,350,12,40,$kirmizi3);;
		/*sp1*/imagefilledellipse($resim,508,350,12,40,$kirmizi3);
		/*sp2*/imagefilledellipse($resim,496,350,12,40,$kirmizi3);
		/*sp3*/imagefilledellipse($resim,484,350,12,40,$kirmizi3);
		/*sp4*/imagefilledellipse($resim,472,350,12,40,$kirmizi3);
		imagepng($resim);
		imagedestroy($resim);
?>