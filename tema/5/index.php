<?php
	/*if(!isset($COOKIE['logat']))
		setcookie ('logat', false);*/
	if (!isset($_GET['page']))
		$_GET['page']="";
	switch ($_GET['page'])
	{
		case "":
			include 'menu.php';
			echo '<p>This is a welcome page :D <br> Everybody can see it</p>';
			if($_COOKIE['logat'])
				echo 'You are logged in :)';
			else
				echo 'You are not logged in';
			break;
		case "login":
			include 'menu.php';
			if(!$_COOKIE['logat'])
			{
				$useri = array("amdin" => "admin", "vlad" => "vlad", "test" => "test");
				echo '
					<div class="lform">
					user:test pass:test
					<form method="post" action="index.php?page=login&action=validate">
						User: <input type="text" name="user" id="bg"><br>
						Pass: <input type="password" name="pass" id="bg1">
						<input type="submit" value="Submit">
					</form>
					</div>
				';
				switch($_GET['action']) {
					case "validate":
						if (isset($useri[$_POST['user']]) && $useri[$_POST['user']]==$_POST['pass']) //valid
						{
							setcookie ('logat', true);
							echo 'Autentificare reusita <meta http-equiv="refresh" content="2; url=index.php">';
						}
						else
							echo 'Wrong USER/PASS... Try again!';
						break;
				}
			}
			else 
				echo 'Sunteti autentificat deja <meta http-equiv="refresh" content="2; url=index.php">';
			break;
		case "logout":
			include 'menu.php';
			setcookie ('logat', false);
			echo 'Succesfuly logged out <meta http-equiv="refresh" content="2; url=index.php">';
			break;
		case "restricted":
			include 'menu.php';
			if ($_COOKIE['logat'])
				echo 'Yay!! This is a secret page ( Sunteti logat :)) )<br><br> Sexy content! Chuck testa';
			else
				echo 'Sorry, you do not have acces to this page ( Nu sunteti logat )';
			break;
	}
?>
