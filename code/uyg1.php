<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form enctype="multipart/form-data" method="post">
<input type="file" name="dosya" />
<input type="submit" name="btn" value="tik" />
<?php
if($_POST['btn']=="tik")
{
$dosya=$_FILES['dosya']['tmp_name'];
$dosya1="images/profilepic/".$_FILES['dosya']['name'];
copy($dosya,$dosya1);
echo $dosya;
}
?>
</form>
</body>
</html>