<?php
if(file_exists=="deneme.txt")
echo"böyle bi dosya var zaten amacın ne laoos";
else
touch("DOSYALAR\\deneme.txt");
fopen("DOSYALAR\\deneme.txt","a");
header( "refresh:5;" );

?>