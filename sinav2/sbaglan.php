<?php
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("filmsitesi",$connect);
$lang=mysql_query("charset 'utf-8'");
?>