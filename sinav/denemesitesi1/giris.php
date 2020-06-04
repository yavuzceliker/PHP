<?php
session_start();
?>
<meta charset="utf-8">
<form method="post">
<table>
	<tr>
		<td>Kullanıcı Adı:</td><td><input type="text" name="kadi"></td>
	</tr>
	<tr>
		<td>Şifre:</td><td><input type="password" name="pass"></td>
	</tr>
	<tr>
		<td><input type="submit" name="btn" value="GİRİŞ"></td>
        
        <td>
        	<?php
				if(@$_POST["btn"]=="GİRİŞ")
				{
					include("baglan.php");
					$kadi=$_POST["kadi"];
					$pass=$_POST["pass"];
					$komut=mysql_query("select * from kullanici where kadi='$kadi' and sifre='$pass'");
					$adet=mysql_num_rows($komut);
					if($adet>=1)
					{
						$_SESSION["oturumacan"]=$kadi;
						$_SESSION["oturumdurumu"]="1";
						header("location:profil.php");
					}
					else
					echo"<script>alert('Kullanıcı Adı veya Şifre Yanlış!');</script>";
				}
			?>
        </td>
	</tr>
</table>
</form>