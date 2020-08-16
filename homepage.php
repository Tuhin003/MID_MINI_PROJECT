<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
		<legend> HOME PAGE</legend>
		<table>
			<tr>
				<td><h2>Welcome<?php session_start(); echo " ".$_SESSION['name'] ?></h2></td>
			</tr>
			<tr>
				<td><a href="home.php"><u>Profile</u></a></td>
			</tr>
			<tr>
				<td><a href="change_password1.html"><u>Change Password</u></a></td>
			</tr>
			<tr>
				<td><a href="viewusers.php"><u>View Users</u></a></td>
			</tr>
			<tr>
				<td>
					<a href="logout.php">Logout</a>
				</td>
			</tr>
		</table>
	</fieldset>
</body>
</html>