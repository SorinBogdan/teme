<?php
	include 'include/config.php';
	include 'include/menu.php';
	if(!isset($_GET['action']))
		$_GET['action']="";
	switch ($_GET['action'])
	{
		case "":
			echo '
				<form method="post" action="register.php?action=validate">
				<table border=0>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="user"><br></td>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass1"></td>
					<tr>
						<td>Confirm password:</td>
						<td><input type="password" name="pass2"></td>
					<tr>
						<td><input type="submit" value="Submit"></td>
				</table>	
				</form>
			';
			break;
		case "validate":
			if(!isset($_POST['user']) || !isset($_POST['pass1']) || !isset($_POST['pass2'])|| $_POST['user']=="" || $_POST['pass1']=="" || $_POST['pass2']=="")
				echo 'Va rugam sa introduceti toate datele';
			elseif ($_POST['pass1']!=$_POST['pass2'])
				echo 'parolele nu sunt identice';
			else
			{
				$user=$_POST['user'];
				$pass=$_POST['pass1'];
				$query="INSERT INTO `t6_useri` (`user`,`pass`) VALUES ('".$user."', '".hash('md5', $pass)."')";
				$result=mysql_query($query, $link);
				if($result)
					echo 'Inregistrarea a avut succes <meta http-equiv="refresh" content="2; url=login.php">';
				else
					echo 'Failed to register <meta http-equiv="refresh" content="2; url=register.php">';
			}
			break;
	}
?>