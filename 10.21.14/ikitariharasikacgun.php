<?php
$sonuc=mktime(6,0,0,9,8,1997);
$sonuc1=mktime(10,10,0,10,21,2014);
$tp=$sonuc1-$sonuc;
$top=($tp/(60*60*24));
$top=$top/365;
echo"$top gun";
?>