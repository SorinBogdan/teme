<link rel="stylesheet" type="text/css" href="style.css">
<?php
echo '
	<div class="menu">
		<a href="index.php">Home</a> | <a href="restricted.php">Restricted page</a> | ';
		if(!$_COOKIE['logat'])
			echo '<a href="login.php">Login</a> | <a href="register.php">Register</a>';
		else
			echo '<a href="logout.php">Logout</a>';
echo '</div>';
?>