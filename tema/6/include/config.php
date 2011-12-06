<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="wt";
	$link=mysql_connect($host, $user, $pass);
	if(!$link)
		die('Could not connect: ' . mysql_error());
	mysql_select_db($db, $link);
?>