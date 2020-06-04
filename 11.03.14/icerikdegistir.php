<?php

$dosya=fopen("DOSYALAR\\deneme.txt","a");
fwrite($dosya,"ali\n");
fwrite($dosya,"veli\n");
fwrite($dosya,"49elli\n");
header( "refresh:5;" );

?>