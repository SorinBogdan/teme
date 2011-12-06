<?php
	include 'include/config.php';
	if(isset($_COOKIE['logat']) && $_COOKIE['logat'])
		echo 'Sunteti autentificat deja <meta http-equiv="refresh" content="2; url=index.php">';
	else
	{
		if(!isset($_GET['action']))
			$_GET['action']="";
		switch($_GET['action'])
		{
			case '':
				include 'include/menu.php';
				echo '
					<form method="post" action="login.php?action=validate">
						User: <input type="text" name="user"><br>
						Pass: <input type="password" name="pass">
						<input type="submit" value="Submit"><br>
					</form>
					';
				break;
			case 'validate':
				ob_start();//output control (start)
				include 'include/menu.php';
				$user=$_POST['user'];
				$pass=$_POST['pass'];
				$query="SELECT * FROM t6_useri WHERE user='$user' AND pass='".hash('md5', $pass)."'";
				$result=mysql_query($query, $link);
				if(mysql_num_rows($result) == 1)
				{
					setcookie("logat", true);
					echo 'Logat cu succes <meta http-equiv="refresh" content="2; url=index.php">';
				}
				else
				{
					setcookie("logat", false);
					echo 'Wrong user/pass <meta http-equiv="refresh" content="2; url=login.php">';
				}
				ob_end_flush();//output control (display output)
				break;
		}
	}
?>