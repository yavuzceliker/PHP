<html>
	<body>
    	<form method="post">
        	<table border="10">
            	<tr>
                	<th colspan="2">Kayit Formu</th>
                </tr>
            	<tr>
                	<td>Adi</td>
                	<td><input type="text" name="ad"</td>
                </tr>
            	<tr>
                	<td>Soyadi</td>
                	<td><input type="text" name="soyad"</td>
                </tr>
            	<tr>
                	<td>Sifre</td>
                	<td><input type="password" name="pw"</td>
                </tr>
            	<tr>
                	<td colspan="2"><input type="submit" name="buton" value="tikla" /></td>
                </tr>
                <tr>
                	<td colspan="2">
            			<?php
							if($_POST["buton"]=="tikla")
							{
								if(ereg("[a-zA-Z0-9]",$_POST["ad"]) and ereg("[0-9]",$_POST["pw"]))
								{ 
									$ad=$_POST["ad"];
									$soyad=$_POST["soyad"];
									$pw=$_POST["pw"];
									echo"Adiniz:$ad<br>Soyadiniz:$soyad<br>Sifreniz:$pw";
								}
								else
								echo"<script>alert('kadi sayi ve harf pw sadece harf');</script>";
							}
						?>
                    </td>
                </tr>
            </table>
            
        </form>
    </body>
</html>