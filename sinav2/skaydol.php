<?php
include("baglan.php");

?>
<form method="post">
<table border="10">
	<tr>
		<td>Kullanıcı Adı</td><td><input type="text" name="kadi" /></td>
	</tr>
	<tr>
		<td>Şifre</td><td><input type="password" name="pass" /></td>
	</tr>
	<tr>
		<td>Telefon</td><td><input type="text" name="tel" /></td>
	</tr>
	<tr>
		<td>Mail</td><td><input type="text" name="mail" /></td>
	</tr>
	<tr>
		<td><input type="submit" name="btn" value="GÖNDER"/></td>
	</tr>
</table>
</form>