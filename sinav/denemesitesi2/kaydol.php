<meta charset="utf-8" />
<form method="post" enctype="multipart/form-data">
<table border="10">
	<tr>
    	<td>AD SOYAD</td>    	<td><input type="text" name="as" /></td>
    </tr>
	<tr>
    	<td>Kullanıcı ADI</td>    	<td><input type="text" name="kadi" /></td>
    </tr>
	<tr>
    	<td>PASS</td>    	<td><input type="password" name="pw" /></td>
    </tr>
	<tr>
    	<td>Telefon</td>    	<td><input type="text" name="tel" /></td>
    </tr>
	<tr>
    	<td>mail</td>    	<td><input type="text" name="mail" /></td>
    </tr>
	<tr>
    	<td>PP</td>    	<td><input type="file" name="pp" /></td>
    </tr>
	<tr>
    	<td><input type="submit" name="btn" value="GONDER"/></td> 
        <td>
        	<?php
				if(@$_POST["btn"]=="GONDER")
				{
					include("baglan.php");
					$as=$_POST["as"];
					$kadi=$_POST["kadi"];
					$pw=$_POST["pw"];
					$tel=$_POST["tel"];
					$mail=$_POST["mail"];
					$gpp=$_FILES["pp"]["tmp_name"];
					$kpp="images/".$_FILES["pp"]["name"];
					copy($gpp,$kpp);
					$com=mysql_query("insert into kullanici (adsoyad,kadi,sifre,mail,telefon,profpic) values('$as','$kadi','$pw','$mail','$tel','$kpp')");
					if($com)
					echo"KAYIT BAŞARILI";
					else
					echo"kayıt başarısız";
				}
			?>
        </td>
    </tr>
</table>
</form>