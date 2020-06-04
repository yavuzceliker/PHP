<?php

touch("sayilar.txt");

$dosya=fopen("sayilar.txt","a");

for($i=1;$i<=100;$i++)
fwrite($dosya,"$i");
?>