<?php
	include 'include/menu.php';
	if ($_COOKIE['logat'])
		echo 'Yay!! This is a secret page ( Sunteti logat :)) )<br><br> Sexy content! Chuck testa';
	else
		echo 'Sorry, you do not have acces to this page ( Nu sunteti logat )';
?>