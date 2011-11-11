#!/usr/bin/php
<?php
	$cnp=fgets(STDIN);
	// S AA LL ZZ JJ NNN C
	// 0 12 34 56 78 9.11 12
	$s=$cnp[0]; $a=$cnp[1].$cnp[2]; $l=$cnp[3].$cnp[4]; $z=$cnp[5].$cnp[6]; $j=$cnp[7].$cnp[8];
	$n=$cnp[9].$cnp[10].$cnp[11]; $c=$cnp[12];
	$suma=0; $secret="279146358279";
	for($i="0"; $i<="11"; $i++)
		$suma=$suma+($cnp[$i]*$secret[$i]);
	$c1=$suma%11;
	if (strlen($cnp)-1!="13")
		echo "Cnp invalid \n";
	elseif ($s<"1" || $s>"2")
		echo "Cnp invalid \n";
	elseif ($a>"99")
		echo "Cnp invalid \n";
	elseif ($l<"1" || $l>"12")
		echo "Cnp invalid \n";
	elseif ($z<"1" || $z>"31")
		echo "Cnp invalid \n";
	elseif ($j<"1" || $j>"52")
		echo "Cnp invalid \n";
	elseif ($n<"1" || $n>"999")
		echo "Cnp invalid \n";
	elseif ($c1=="10" && $c!="1" || $c1!="10" && $c!=$c1)
		echo "Cnp invalid \n";
	else
		echo "Cnp valid \n";
?>
