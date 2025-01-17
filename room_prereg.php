<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		$father_name = $_POST['father_name'];
		$mother_name = $_POST['mother_name'];
		$email = $_POST['email'];
		$membership = $_POST['membership'];
		$address = $_POST['address'];
		$pass = $_POST['pass'];
		$mobile_no = $_POST['mobile_no'];
		$type = $_POST['type'];
		$gender = $_POST['gender'];
		$charges_room_yearly = 90000;
		$charges_room_qauterly = 55000;
		$charges_room_monthly = 11000;
		if(!empty($name) && !empty($father_name))
		{

			//save to database
			
			if ($membership == 'For a month') {
				# code...

				$query = "insert into visitors (name, father_name, mother_name, email, membership, charges, address, pass, mobile_no, type, gender) values ('$name', '$father_name','$mother_name','$email','$membership','$charges_room_monthly','$address','$pass','$mobile_no', '$type', '$gender')";

				mysqli_query($con, $query);
				header("Location: home.php");

				die;

			}
			elseif ($membership == 'Quaterly') {
				# code...

				$query = "insert into visitors (name, father_name, mother_name, email, membership, charges, address, pass, mobile_no, type, gender) values ('$name', '$father_name','$mother_name','$email','$membership','$charges_room_qauterly','$address','$pass','$mobile_no', '$type', '$gender')";

				mysqli_query($con, $query);
				header("Location: home.php");

				die;

			}

			elseif ($membership == 'Yearly') {
				# code...

				$query = "insert into visitors (name, father_name, mother_name, email, membership, charges, address, pass, mobile_no, type, gender) values ('$name', '$father_name','$mother_name','$email','$membership','$charges_room_yearly','$address','$pass','$mobile_no', '$type', '$gender')";

				mysqli_query($con, $query);
				header("Location: home.php");

				die;

			}
			else{
				echo "please select the membership";
			}

		}

		else
		{
			echo "Data is not pushed";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Info Page</title>
</head>

<style type="text/css">
	*{
		padding: 0;
		margin: 0;

	}

	body{
		background-color: #00FFFF;
	}

	.container{
		width: 100%;
		height: 100vh;
		background-color: rgb(0,0,0,0.8);
		display: flex;
		justify-content: center;
		align-items: center;

	}

	.section{
		width: 55%;
		height: 65vh;
		background-color: white;
		border-radius: 30px;
	}

	.first-section{
		width: 100%;
		height: 30px;
		
	}

	.section h2{
		margin-top: 20px;
		margin-left: 20px;
	}


	.middle-form{
		margin-top: 20px;
		width: 100%;
		height: 40vh;
	}

	.input-section{
		display: flex;
	}

	.input input{
		width: 60%;
		margin-top: 20px;
		margin-left: 20px;
		padding: 5px;
	}

	.input select{
		width: 50%;
		margin-top: 20px;
		margin-left: 20px;
		padding: 5px;
	}

	.input1{
		margin-left: -90px; 
	}

	.input1 input{
		width: 90%;
		margin-top: 20px;
		padding: 5px;
		

	}

	.input1 select{
		margin-top: 20px;
		width: 95%;
		padding: 5px;
	}

	button{
		
		margin-left: 40%;
		padding: 10px 30px;
		border-radius: 10px;
		cursor: pointer;

	}


	.last-section{
		margin-top: -40px;
		width: 100%;
		height: 10vh;
		display: flex;
		align-items: center;
		justify-content: center;
		

	}

	.last-section input{

		 margin-left: 40px;



	}
</style>

<body>
<div class="container">
	<div class="section">
		<div class="first-section">
			<h2>Register</h2>
		</div>
		<form method="POST">			
			<div class="middle-form">
				<div class="input-section">
					<div class="input">
						<input type="text" name="name" placeholder="name">
						<input type="text" name="father_name" placeholder="Father Name">
						<input type="text" name="mother_name" placeholder="Mother Name">
						<input type="Email" name="email" placeholder="Email">
						<select name="membership">					
							<option>---Membership---</option>
							<option>For a month</option>
							<option>Quaterly</option>
							<option>Yearly</option>
						</select>
					</div>
					<div class="input1">	
						<input type="text" name="address" placeholder="Address in short">
						<input type="password" name="pass" placeholder="UNI_Code(password)">
						<input type="mobile" name="mobile_no" placeholder="Mobile Number">
						<select name="type">					
							<option>Rent a room</option>
						</select>
					</div>
				</div>
			</div>
			<div class="last-section">
				Gender:
				<input type="radio" id="Male" name="gender" value="Male">
				<label for="Male">Male</label><br>
				<input type="radio" id="Female" name="gender" value="Female">
				<label for="Female">Female</label><br>
				<input type="radio" id="Other" name="gender" value="Other">
				<label for="Other">Other</label>
			</div>
			<button>Submit</button>
		</form>
	</div>
</div>
</body>
</html>

 