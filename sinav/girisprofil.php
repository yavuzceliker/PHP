
          
          
          
          
          
            			<?php
							if($_POST["kadi"]=="admin" and $_POST["pw"]=="12345")
							{ 
									echo"<h1>Hosgeldin ".$_POST["kadi"]."</h1>";
							}
							else
							{	
								echo"<h1>Kaybol ".$_POST["kadi"]." adini sevmedim.</h1>";
								header("refresh:2; giris.php");
							}
						?>
          