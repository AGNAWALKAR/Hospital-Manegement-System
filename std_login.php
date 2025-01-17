<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$pass = $_POST['pass'];

		if(!empty($user_name) && !empty($pass))
		{

			//read from fbsql_database(link_identifier)
			$query = "select * from new_std where mobile_no = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['pass'] === $pass)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: std_lg/std_home.php");
						die;
					}
					else{
						echo"LOL";
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "Login error";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Rajgad Login | Student</title>
</head>
<body>
	<style type="text/css">
		*{
	padding: 0px;
	margin: 0px;

}
body{

	height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: grey;
	background-image: url(bg3.jpg);
	background-size: cover;
	background-repeat: no-repeat;

}
.container{
	width: 400px;
	height: 300px;
	background-color: white;
	display: flex;
	align-items: center;
	justify-content: center;
	border-radius: 10px;
}
.form-login{

	margin-top: 50px;
}


.form-login h1{
	font-size: 30px;
	margin-top: -50px;
	position: absolute;
}


.form-input{
	width: 80%;

}

.form-input input{
	
	width: 300px;
	border: none;
	outline: none;
	background: none;
	border-bottom: 1px solid black;
	font-size: 15px;
	padding: 8px 8px;


}

.form-input1 input{
	width: 300px;
	margin-top: 20px;
	border: none;
	outline: none;
	background: none;
	border-bottom: 1px solid black;
	font-size: 15px;
	padding: 8px 8px;
	position: absolute;

}

.btn{
	margin-top: 80px;
	max-width: 330px;
	width: 100%;
	border-radius: 10px;
	height: 40px;
	font-size: 18px;
	cursor: pointer;
	transition: 0.4s;
	
}

.btn:hover{
	font-size: 22px;
	transition: 0.3s;
	font-family: sans-serif;
}

form h4{
	margin-top: 25px;
	text-align: center;
}



@media screen and (max-width: 768px){
	body{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.container{
		width: 80%;
	}

	.form-login{
		width: 80%;
		
	}
	form{
		width: 90%;
		
	}

	.form-input{
		width: 100%;
		

	}

	.form-input input{
		width: 100%;
		
	}

	.form-input1{
		width: 100%;
		

	}

	.form-input1 input{
		width: 58%;
		
	}

	.btn1{
		display: flex;
		align-items: center;
		justify-content: center;
		margin-left: 18px;
	}

	.btn1 .btn{
		max-width: 350px;
		width: 100%;
	}

}
	</style>

	<div class="container">
		<div class="form-login">
			<h1>Login</h1>
			<form method="POST">

				<div class="form-input">
					<input type="textbox" placeholder = "Username" name="user_name" required>
				</div>

				<div class="form-input1">
					<input type="password" placeholder = "Password" name="pass" required>
				</div>
				<div class="btn1">
					
					<button class="btn">Login</button>
					
				</div>
				
				
								
			</form>
		</div>
	</div>


</body>
</html>