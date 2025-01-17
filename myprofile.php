<!DOCTYPE html>
<html>
<head>
	<title>MyProfile | Student Login</title>
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
	

	.container a{
		float: left;
		margin-top: 30px;
		margin-left: 30px;
	}

	.container .btn{
		padding: 10px 20px;
		cursor: pointer;
	}

	.main{

		width: 60%;
		height: 60vh;
		background-color: white;
		position: absolute;
		top: 53%;
		left: 50%;
		transform: translate(-50%, -50%);
		border-radius: 30px;
	}

	.round{
		width: 15%;
		height: 25%;
		background-image: url('profile.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		border-radius: 100px;
		position: absolute;
		top: 20%;
		left: 30%;
		transform: translate(-50%, -50%);
	}

	.main .input-section{
		
		width: 100%;
		height: 400px;
		background-color: grey;
	}

	.main .input-section .mobile{
		margin-left: 400px;
		margin-top: 20px;
		padding: 10px 20px;
	}

	.main .input-section button{
		padding: 10px 20px;
		cursor: pointer;
	}

	.input{
		
	}

	.input input{
		float: left;
		height: auto;
		width: 300px;
		padding: 10px 20px;
		margin-top: 20px;
		margin-left: 20px;
	}
	
	.input a{
		margin-left: 40%;
	}

	


</style>
<body>
	
	<div class="container">
		<a href="std_home.php">
			<button class="btn"><< Go Back</button>
		</a>
	
		
			
		</form>
		
		<div class="main">
			<div class="section-left">
				<div class="heading">

					
					
				</div>
			</div>
			<form method="POST">
				<div class="input-section">
					<input type="text" name="mobile_no" placeholder="Enter Your Number" class="mobile">
					<button name="search"> Search</button>

					<?php

			           		include('connection.php');

			           		if(isset($_POST['search'])) {
			           			# code...
			           			$mobile_no = $_POST['mobile_no'];
			           			$query = "SELECT * FROM new_std WHERE mobile_no = '$mobile_no' ";
			           			$query_run = mysqli_query($con, $query);

			           			if (mysqli_num_rows($query_run) > 0) {
			           				# code...
			           				while ($row = mysqli_fetch_array($query_run)) {
			           					# code

			           					?>
			           					<div class="input">
											<input type="text" name="name" class="input-1" value="<?php echo $row['name']; ?>">
											<input type="text" name="father_name" class="input-1" value="<?php echo $row['father_name']; ?>">
											<input type="text" name="mother_name" class="input-1" value="<?php echo $row['mother_name']; ?>">
											<input type="Email" name="email" class="input-1" value="<?php echo $row['email']; ?>">

											<input type="text" name="address" class="input-2" value="<?php echo $row['address']; ?>">
											<input type="password" name="pass" class="input-2" value="<?php echo $row['pass']; ?>">
											<input type="text" name="college" class="input-2" value="<?php echo $row['college']; ?>">
											<input type="text" name="membership" class="input-2" value="<?php echo $row['membership']; ?>">
											<a href="">
												<button name="update">Update</button>
											</a>
										</div>

										<?php
			           					}
				           			}
				           			else{
				           				echo "No records found";
				           			}


			           		}
			           		



			           ?>

			           <?php 
							

								$dbhost = "localhost";
								$dbuser = "root";
								$dbpass = "";
								$dbname = "hostel";

								if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
								{

									die("failed to connect!");
								}

								if(isset($_POST['update']))
								{
									//something was posted
									$name = $_POST['name'];
									$father_name = $_POST['father_name'];
									$mother_name = $_POST['mother_name'];
									$email = $_POST['email'];
									$address = $_POST['address'];
									$college = $_POST['college'];
									$pass = $_POST['pass'];
									$mobile_no = $_POST['mobile_no'];
									

									
									if(!empty($name))
									{

										//save to database
										
										$query = "UPDATE new_std 
											   SET name = '$name', 
											   father_name = '$father_name', 
											   mother_name = '$mother_name', 
											   email = '$email', 
											   address = '$address', 
											   pass = '$pass', 
											   college = '$college'  
											   WHERE mobile_no = '$mobile_no' ";

									mysqli_query($con, $query);
										
									echo "Updated Successfully";

									die;
									}else
									{
									echo "error";
									
									}
						
										//save to database
								}		
									
									
									
						?>


					

				</div>
			</form>
		</div>
		<div class="round">
			
		</div>
	</div>

</body>
</html>