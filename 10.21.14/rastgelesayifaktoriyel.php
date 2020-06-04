<?php

function fak($x)
{
	$top=1;
for($i=$x;$i>1;$i--)
{
	$top=$top*$i;
	echo"$i.";
}
	echo " 1.Sayi=$x  <br> Fak=$top ";
}
$t=rand(1,6);

fak($t);
?>