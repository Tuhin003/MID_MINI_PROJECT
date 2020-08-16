<?php

	$conn = mysqli_connect('127.0.0.1', 'root', '', 'midminiproject');
	$result = mysqli_query($conn, 'select * from registrationdb');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<br>s
	<center>
	<table border=1>
		<tr>
			<td colspan="4" align="center">Users</td>
		</tr>
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>USERTYPE</td>
		</tr>

		<?php  while($data = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $data['id'] ?></td>
			<td><?php echo $data['name'] ?></td>
			<td><?php echo $data['email'] ?></td>
			<td><?php echo $data['usertype'] ?></td>
		</tr>

		<?php } ?>
		<tr>
			<td colspan="4" align="right"><a href="adminshomepage.php"><u>Go Home</u></a></td>
		</tr>

	</table>
	</center>
</body>
</html>