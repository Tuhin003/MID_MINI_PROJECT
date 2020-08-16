<?php

	if (isset($_POST['submit'])) 
	{
		# code...
		$conn = mysqli_connect('127.0.0.1', 'root', '', 'midminiproject');
		$sql= 'select * from registrationdb where userid="'.$_POST['userid'].'"';
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($result);
		if (empty($data)) 
		{
			# code...
			if ($_POST['password'] == $_POST['confirmpassword'])
			{
				# code...
				$sql1="INSERT INTO registrationdb (id, password, name, email, usertype) VALUES ('".$_POST['id']."', '".$_POST['password']."', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['usertype']."')";
				mysqli_query($conn,$sql1);
				header("location: login.html");
			}
			else
			{
				header("location: registration.html");
				echo "Password and ConfirmPassword does not match";
			}
			mysqli_close($conn);
		}
		else
		{
			header("location: registration.html");
		}
	}
	else
	{
		echo "invalid";
	}
	

?>