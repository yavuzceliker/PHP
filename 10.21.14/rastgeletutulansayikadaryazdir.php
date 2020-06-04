<?php

function tutulansayıkadar($y,$x)
{
	for($i=1;$i<$x;$i++)
	{
		echo"$i.$y <br>";
		}
	

}
$t="test";
$r=rand(1,55);
tutulansayıkadar($t,$r);
?>