<?php
header("Content-Type:image/png");
$alan=imagecreatetruecolor(500,500);
$renk=imagecolorallocate($alan,255,255,0);
$renk2=imagecolorallocate($alan,0,255,255);
imagefill($alan,0,0,$renk);
imagefilledellipse($alan,250,250,250,250,$renk2);
imagefilledrectangle($alan,50,50,450,450,$renk2);
imagepng($alan);
imagedestroy($alan);
?>