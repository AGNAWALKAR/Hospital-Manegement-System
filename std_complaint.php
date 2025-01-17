<!DOCTYPE html>
<html>
<head>
	<title>Complaint | Student Login</title>
</head>
<style type="text/css">
	
	*{
		padding: 0px;
		margin: 0px;
	}

	.container{
		width: 100%;
		height: 100vh;
		background-color: #00FFFF;	
	}

	.container h1{
		padding-top: 10px;
		text-align: center;
	}
	.container button{
		margin-top: -30px;
		margin-left: 20px;
		padding: 10px 20px;
		cursor: pointer;
	}

	.section{
		position: absolute;
		top: 50%;
		left: 50%;
		transform:translate(-50%, -50%);
		width: 70%;
		height: 70vh;
		background-color: white;
		border-radius: 30px;
	}

	.section input{
		padding: 10px 20px;
		margin-top: 30px;
		margin-left: 50px;
	}

	textarea{
		width: 400px;
		height: 38vh;
		margin-top: 30px;
		margin-left: 50px;
	}

	.section button{
		position: absolute;
		margin-left: 550px;
		margin-top: -40px;
	}
	



</style>
<body>

	<div class="container">
		<h1>Complaint Area</h1>
		<a href="std_home.php"><button><< Go back</button></a>
		<div class="section">
			<form method="POST">
				
				<div class="input">
					<input type="text" name="name" placeholder="Enter Your name..">
				</div>

				<div class="input">
					<input type="text" name="mobile_no" placeholder="Enter Your Number..">
				</div>
				

				<div class="input">
					
					<textarea name="issue" placeholder="  Detailed discription about issue/problem.." class="textarea"></textarea>
				</div>

				
				<button name="insert">Submit</button>

				<?php
				          	include('connection.php');
				          	if (isset($_POST['insert'])) {
				          		# code...
				          		$name = $_POST['name'];
				          		$mobile_no = $_POST['mobile_no'];
				          		$issue = $_POST['issue'];
				          		

				          		if (!empty($name) && !empty($mobile_no)) {
				          			# code...
				          			$insert_query = "insert into std_complaint(name, mobile_no, issue) 
				          			values('$name', '$mobile_no', '$issue')";
				          			mysqli_query($con, $insert_query);

				          			

				          			echo "Data Pushed";
				          			
				          		}
				          		else{
				          			echo "Please fill all information";
				          		}
				          	}
				          	
				?>

			</form>
			
		</div>
	</div>

</body>
</html>