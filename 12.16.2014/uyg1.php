<?php
/* version bılgılerını listeler..
echo phpinfo();*/
header("Content-Type:image/png");

//çalısma alanı olusturma   (genişlik,yukseklik)
//$resim=imagecreatetruecolor(rand(250,600),rand(300,700));
$resim=imagecreatetruecolor(600,600);
//imagecolorallocate(calısma alanı,r,g,b)
$kirmizi=imagecolorallocate($resim,rand(1,255),rand(1,255),0);
$sari=imagecolorallocate($resim,255,255,0);
//kırmızı rengi arka plan rengi yapalım
imagefill($resim,0,0,$kirmizi);
//çalısma alanını gosterme
imagepng($resim);

//bellekte yer tutmasın dıe bellekten sılme 
imagedestroy($resim);

?>
