
            <?php
			session_start();
				if($_POST["btn"]=="yolla")
				{
					if($_SESSION["oturumdurumu"]==true)
					{
						echo"Hoşgeldin".$_SESSION["oturumacan"];
					}
					else
					{
						echo"bu sayfa uyelere ozel.";
						header("refresh:3; giris.php");
					}
				}
			?>
