<link rel="stylesheet" type="text/css" href="style.css">
<?php
echo '
	<div class="menu">
		<a href="index.php">Home</a> | <a href="index.php?page=restricted">Restricted page</a> | ';
		if(!$_COOKIE['logat'])
			echo '<a href="index.php?page=login">Login</a>';
		else
			echo '<a href="index.php?page=logout">Logout</a>';
echo '</div>';
?>
