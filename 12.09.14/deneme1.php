
<form action="" method="post">
<input type="text" name="kadi" />
<input type="text" name="sifre" />
<input type="submit" value="OK" name="yolla" />
</form>
<?php
if($_POST["yolla"]="OK")
{
$kadi=$_POST["kadi"];
$sifre=$_POST["sifre"];

if(@ereg("[a-z]{2,20}",$kadi))
{
	echo"<b>KULLANICI ADINIZ: $kadi</b><br>";
}
else
echo"YANLIS KULLANICI ADI";

if(@ereg("[0-9]{3,8}",$sifre))
{
	echo"<b>SIFRENIZ: $sifre</b>";
}
else
echo"YANLIS SIFRE";

}
?>