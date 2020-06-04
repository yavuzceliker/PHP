
          
          
          
          
          
            			<?php
							
							if(file_exists("textt.txt"))
								echo"napirsin lo bole dosya zoten voar kafir misen";
							else
							{
								touch("text.txt");
								$dosya=fopen("text.txt","a");
								for($i=0;$i<=100;$i++)
								{
									echo"lo kafir dosyana $i yazdim ha<br>";
									fwrite($dosya,"$i\d");
								}
							}
							/*header("refresh:0.1");
							function a($x)
							{
								$x=rand(0,10);
								return $x;
							}
							for($i=0;$i<=10;$i++)
							{
								$i=+a($i);
								for($j=0;$j<=$i;$j++)
								{
								$j=+a($j);
									echo"*";
								}	
								
								echo"<br>";
							}*/
							
						?>
          