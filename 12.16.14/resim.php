<?php
header("Content-Type:image/png");

if($_POST["ciz"]!="CIZ")
{
	header("Location:alanolustur.php");
}
else
{
	$width=$_POST["genislik"];
	$height=$_POST["yukseklik"];
	$r=$_POST["r"];
	$g=$_POST["g"];
	$b=$_POST["b"];

		//imagecreatetruecolor(genişlik,yükseklik);
		$resim=imagecreatetruecolor($width,$height);
		
		//imagecolorallocate(Çalışma Alanı,R,G,B);
		$kirmizi=imagecolorallocate($resim,$r,$g,$b);
		
		//Kırmızıyı arkaplan olarak ayarlayalım
		imagefill($resim,0,0,$kirmizi);
		
		//çalışma alanını görme
		imagepng($resim);
		
		//resmi bellekten sil
		imagedestroy($resim);
}
?>