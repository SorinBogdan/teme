<?php
	include 'include/menu.php';
	echo '<p>This is a welcome page :D <br> Everybody can see it</p>';
	if($_COOKIE['logat'])
		echo 'You are logged in :)';
	else
		echo 'You are not logged in';
?>