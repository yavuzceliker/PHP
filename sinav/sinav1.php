<meta charset="utf-8" />
<form method="post" action="" enctype="multipart/form-data">
<table border="10">
			
    <tr>
		<td>KLASÖR İSMİ</td>  <td><input type="text" name="klasor" /></td>
	</tr>
    <tr>
    	<td><input type="submit" name="klasorbtn" value="OLUŞTUR" /></td>
        <td>
        	<?php
				if(@$_POST["klasorbtn"]=="OLUŞTUR")
				{
					$klasoradi=$_POST["klasor"];
					
					if(file_exists($klasoradi))
						echo"KLASÖR VAR ZATEN";
					else
					{
						mkdir($klasoradi);
						echo"KLASÖR OLUŞTURULDU";
					}
				}
			?>
        </td>
    </tr>
</table>
</form>