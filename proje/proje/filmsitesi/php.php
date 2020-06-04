<form method="post" enctype="multipart/form-data">
<input type="file" name="file"/>
<input type="submit" name="gnder" value="gonder" />
<?php
	
	
	
	
	
	
	
	
	if($_POST["gnder"]=="gonder")
	{
		$img=$_FILES["file"]["size"];
		echo $img;
	}
?>
</form>