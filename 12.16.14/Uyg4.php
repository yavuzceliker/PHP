<?php
		header("Content-Type:image/png");
		header("refresh:0.0001");
		//imagecreatetruecolor(genişlik,yükseklik);
		$resim=imagecreatetruecolor(1000,1000);
		//imagecolorallocate(Çalışma Alanı,R,G,B);
		$kirmizi=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		//Kırmızıyı arkaplan olarak ayarlayalım
		imagefill($resim,0,0,$kirmizi);
		$s1=0;
		$s2=0;
		$s3=500;
		$s4=1000;
		$s5=500;
		$s6=500;
		$s7=1000;
		$s8=1000;
		$s9=500;
		$s10=0;
		$s11=1000;
		$s12=1000;
		$fark=0.5;
		//dikdortgen or kare
		while($s1<=$s3)
		{
		$s=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		imagefilledrectangle($resim,$s1,$s2,$s3,$s4,$s);
		$s1=$s1+$fark;
		$s2=$s2+$fark;
		$s3=$s3-$fark;
		$s4=$s4-$fark;
		}
		while($s5<=$s7)
		{
		$s=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		imagefilledrectangle($resim,$s5,$s6,$s7,$s8,$s);
		$s5=$s5+$fark;
		$s6=$s6+$fark;
		$s7=$s7-$fark;
		$s8=$s8-$fark;
		}
		while($s9<=$s12)
		{
		$s=imagecolorallocate($resim,rand(0,255),rand(0,255),rand(0,255));
		imagefilledrectangle($resim,$s9,$s10,$s11,$s12,$s);
		$s9=$s9+$fark;
		$s10=$s10+$fark;
		$s11=$s11-$fark;
		$s12=$s12-$fark;
		}
		imagepng($resim);
		imagedestroy($resim);
?>