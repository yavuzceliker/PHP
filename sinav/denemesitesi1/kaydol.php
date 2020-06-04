<meta charset="utf-8" />
<form method="post" action="" enctype="multipart/form-data">
<table border="10">
    <tr>
		<td>AD SOYAD:</td>  <td><input type="text" name="adi" /></td>
	</tr>
    <tr>
		<td>Kullanıcı ADI:</td>  <td><input type="text" name="kadi" maxlength="10" /></td>
	</tr>
    <tr>
		<td>Şifre:</td>  <td><input type="text" name="pass" maxlength="10" /></td>
	</tr>
    <tr>
		<td>Mail:</td>  <td><input type="text" name="mail" /></td>
	</tr>
    <tr>
		<td>Telefon:</td>  <td><input type="text" name="tel" /></td>
	</tr>
    <tr>
		<td>Profil Resmi:</td>  <td><input type="file" name="pic" /></td>
	</tr>
    <tr>
    	<td><input type="submit" name="btn" value="KAYDOL" /></td>
        <td>
        	<?php
				if(@$_POST["btn"]=="KAYDOL")
				{
					$adi=$_POST["adi"];
					$kadi=$_POST["kadi"];
					$pass=$_POST["pass"];
					$mail=$_POST["mail"];
					$tel=$_POST["tel"];
					$gyer=$_FILES["pic"]["tmp_name"];
					$kyer="images/".$_FILES["pic"]["name"];
					copy($gyer,$kyer);
					include("baglan.php");
	                $komut=mysql_query("insert into kullanici(adsoyad,kadi,sifre,mail,telefon,profpic) values('$adi','$kadi','$pass','$mail','$tel','$kyer')");
					if($komut)
					echo"KAYIT TAMAMLANDI.";
					else
					echo"<script>alert('KAYIT BAŞARISIZ!');</script>";
					
				}
			?>	
        </td>
    </tr>
</table>
</form>