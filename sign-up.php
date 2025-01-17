<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$Email = $_POST['Email'];
		$Mobile = $_POST['Mobile'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
		
			$query = "insert into users (user_name,password,email,mobile) values ('$user_name','$password','$Email','$Mobile')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
	else
	{
		echo "lol";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up | Rajgad Hostel</title>
	<link rel="stylesheet" type="text/css" href="sign-up.css">
</head>
<body>


	<div class="container">
		<div class="form-login">
			<h1>Sign-Up</h1>
			<form method="POST">

				<div class="form-input">
					<input type="textbox" placeholder = "Username :" name="user_name" required>
				</div>

				<div class="form-input1">
					<input type="password" placeholder = "Password : " name="password" required>
				</div>

				<div class="form-input2">
					<input type="Email" placeholder = "Email :" name="Email" required>
				</div>

				<div class="form-input3">
					<input type="Mobile" placeholder = "Mobile : " name="Mobile" required>
				</div>

				<div class="btn1">
					
					<button class="btn">Sign-Up</button>
					
				</div>
				
				<div class="sign-up">
					
					<label>Alredy have an account?</label>
					<a href="ad_login.php">Login</a>

				</div>
								
			</form>
		</div>
	</div>




</body>
</html>