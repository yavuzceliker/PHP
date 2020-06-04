<?php
	session_start();
	if($_SESSION["oturumdurumu"]==1)
	echo"Hoşgeldin ".$_SESSION["oturumacan"];
	else
	{
		echo"Oturum Açmadınız";
		header("location:giris.php");
	}
?>
<meta charset="utf-8">
<form method="post">
<input type="submit" name="btn" value="asd">
</form>
<?php
	if(@$_POST["btn"]=="asd")
	{
		session_destroy();
		$_SESSION["oturumdurumu"]==0;
		header("location:giris.php");
	}
?>