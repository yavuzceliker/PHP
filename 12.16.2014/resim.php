<?php
if($_POST["ciz"]!="Ciz")
{
	header("Location:giris.php");
}
else
{
	$genislik=$_POST["genislik"];
$yukseklik=$_POST["yukseklik"];
$R=$_POST["r"];
$G=$_POST["g"];
$B=$_POST["b"];

header("Content-Type:image/png");

$resim=imagecreatetruecolor($genislik,$yukseklik);
$kirmizi=imagecolorallocate($resim,$R,$G,$B);
imagefill($resim,0,0,$kirmizi);
imagepng($resim);
imagedestroy($resim);
}

?>