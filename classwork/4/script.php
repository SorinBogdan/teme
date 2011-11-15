<?php
	if (!isset($_POST['name']))
		die("Nu ati introdus un username");
	$name=$_POST['name'];
	setcookie("name", "$name");
	echo "Hello, $name! \n ";
	echo $_COOKIE['name'];
?>

<form method="post" action="script1.php">
Varsta: <input type="text" name="age">
<input type="submit" value="Submit">
</form>
