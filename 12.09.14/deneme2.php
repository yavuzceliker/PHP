
<form action="" method="post">
<textarea name="or">
</textarea>
<br />ORG<input type="text" name="org" /><br />
DEG<input type="text" name="dem" /><br />
<input type="submit" value="DEGIS" name="degis" />
</form>
<?php
if($_POST["degis"]="DEGIS")
{
$org=$_POST["org"];
$dem=$_POST["dem"];
$or=$_POST["or"];
$sonuc=@ereg_replace($org,$dem,$or);
echo"<textarea>$sonuc</textarea>";

}
?>