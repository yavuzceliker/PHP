
          
          
          
          
          
            			<?php
						
						$dosya=opendir(".");
						
						while($isim=readdir($dosya))
						{
							if(is_dir($isim))
								echo"$isim<br><br>";
							else
								echo"$isim<br>";

						}

						?>
          