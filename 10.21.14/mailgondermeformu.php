<?php
if($_POST["btn"]=="Gonder")
{
	$baslik=$_POST["baslik"];
		$mesaj=$_POST["mesaj"];
			$adres="yavuz.celiker@windowslive.com";
			//mail($adres,$baslik,$mesaj,"From:yavuz.celiker@hotmail.com/r/n"); gonderen kisi
			if(mail($adres,$baslik,$mesaj))
			      echo"Mailiniz  gönderildi";
			else
			echo"Mailiniz  gönderilmedi";
}
?>
<html>
<head>
<title>
Mesaj Gonderme Formu
</title>
</head>
<form method="post" action="">
<table  border="1px" bgcolor="#66FFFF">
  <tr>
  
     <td width="600px" height="20px" >
    Baslik: <input type="text" name="baslik" style="width:550px;" />
     </td>
  </tr>

  <tr>
     <td width="600px" height="500px">
     Mesajiniz;<br />
     <textarea name="mesaj" style="height:500px; width:600px;background-color:#FFC;"  />    </textarea>
     </td>
  </tr>
  
  
  <tr>
  <td width="600px" height="20px" align="right">
  <input type="button" name="btn" value="Gonder"/>
  </td >
  </tr>
</table>
</form>
</html>