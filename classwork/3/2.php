#!/usr/bin/php
<?php
	$x=fgets(STDIN);
	$nr=0;
	$y = strlen($x)-1;
	for ($i=0; $i<$y; $i++)
	{
		if($x[$i]>="0" && $x[$i]<="9")
			$nr++;
	}
	echo "$i caractere,  $nr cifre \n";
?>