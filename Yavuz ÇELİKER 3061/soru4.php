<html>
	<body>
    	<form method="post">
        	<table border="10">
            	<tr>
                	<td>kadi</td>
                    <td><input type="text" name="kadi" /></td>
                </tr>
            	<tr>
                	<td>pass</td>
                    <td><input type="password" name="pw" /></td>
                </tr>
            	<tr>
                	<td><input type="submit" name="btn" value="yolla"/></td>
                </tr>
            </table>
            <?php
				if($_POST["btn"]=="yolla")
				{
					if(ereg("[a-z]{3,20}",$_POST["kadi"]) and ereg("[0-9]{1,10}",$_POST["pw"]))
					{
						echo"giris basarili";
					}
					else
					{
						echo"giris basarisiz";
					}
				}
			?>
        </form>
    </body>
</html>