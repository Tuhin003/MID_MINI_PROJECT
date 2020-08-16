<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<table>
			<tr>
				<td colspan="2" align="center">Profile</td>
			</tr>
			<tr>
				<td>ID</td>
				<td><?php session_start(); echo " ".$_SESSION['id']?></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><?php  echo " ".$_SESSION['name']?></td>
			</tr>		
			<tr>
				<td>EMAIL</td>
				<td><?php  echo " ".$_SESSION['email']?></td>
			</tr>
			<tr>
				<td>USER TYPE</td>
				<td><?php  echo " ".$_SESSION['usertype']?></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><a href="adminshomepage.php"><u>Go Home</u></a></td>
			</tr>
		</table>
    </center>
</body>
</html>