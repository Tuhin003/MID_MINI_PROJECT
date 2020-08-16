<?php
	session_start();

		if(isset($_POST['submit'])){

			$id 			= $_POST['id'];
			$password 		= $_POST['password'];

			if(empty($id) || empty($password)){
				echo "null submission";

			}else{
				
				$conn =mysqli_connect('127.0.0.1', 'root', '', 'midminiproject');
				$sql = "select * from registrationdb where id='{$id}' and password='{$password}'";
				$result = mysqli_query($conn, $sql);
				$user=mysqli_fetch_assoc($result);
				
				if(!empty($user)){
					$_SESSION['name']  = $user['name'];
					$_SESSION['id']  = $id;
					$_SESSION['usertype']  = $user['usertype'];
					$_SESSION['email']  = $user['email'];
					if ($user['usertype']=='admin') {
						# code...
						header('location: adminshomepage.php');
					}
					else
					{
						header('location: usershomepage.php');
					}
					
					
				}
				else
				{
					echo "Invalid id/password";
				}
			}

		}
		else
		{
			header("location: login.html");
		}
?>