<?php
$dosya=fopen("DOSYALAR\\deneme2.doc","r");
while(!feof($dosya))
{
	$okunan=fgets($dosya);
	echo"$okunan<br>";
}
?>