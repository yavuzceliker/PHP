<?php
$dosya=opendir("BELGELER");
while($isim=readdir($dosya))
{
	if(is_dir($isim))
	echo"<img src='kaylisor.PNG'>$isim<br><br>";
	else
	echo"$isim<br>";

}
?>