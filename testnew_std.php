<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<style type="text/css">
	
	*{
		margin:0px;
		padding: 0px;
	}

	.section{
		float: left;
		width: 30%;
		height: 100vh;
		background-color:rgb(0,0,0,0.6); 
	}

	.section-1{
		float: left;
		width: 100%;
		height: 100vh;
		background-color: red;
		text-align: center;
	}

	.section-1 button{
		margin-top: 75px;
		text-align: center;
		width: 90%;
		padding: 5px 10px;
		border-radius: 5px;
		cursor: pointer;
		
	}


	.section-2 h1{

		text-align: center;
		margin-top: 10px;

	}
	.section-2{
		float: right;
		width: 70%;
		height: 100vh;
		background-color: #00FFFF;
	}

	.input-section{
		position: absolute;
		top: 50%;
		left: 65%;
		transform: translate(-50%, -50%);
		background-color: white;
		width: 60%;
		height: 80vh;
		border-radius: 20px;

	}

	.input-section .input-1{
		position: absolute;
		width: 50%;
		height: 400px;
		float: left;
		padding: 20px;



	}


	.input-section .input-1 input{
		width: 300px;
		padding: 10px;
		margin-top: 30px;
		margin-left: 10px;
	}

	.input-section .input-1 .search-input{
		width: 40%;
		position: relative;
		margin-left: 10px;
		margin-bottom: -100px;
	}

	.input-section .input-1 button{
		
		margin-left: 50px;
		margin-top: 30px;
		padding: 10px 20px;
		cursor: pointer;

	}


	.input-section .input-2{
		width: 75%;
		height: 400px;
		float: right;
		margin-top: -440px;
		padding: 20px;
	}

	.input-section .input-2 input{
		width: 250px;
		padding: 10px;
		margin-top: 30px;
		margin-left: 350px;
	}


	.combo-box{
		width: 275px;
		padding: 10px;
		margin-top: 30px;
		margin-left: 350px;
	}

	.input-1 button{
		cursor: pointer;
		margin-left: 400px;
	}



</style>
<body>


<div class="body">
	<div class="section">
		<div class="section-1">
				<a href="mn_rm.php">
					<button>Manage Room</button>
				</a>

				<a href="new_std.php">
					<button>New Student</button>
				</a>

				<a href="up_std.php">
					<button>Update Student Data</button>
				</a>

				<a href="fees.php">
					<button>Fees</button>
				</a>

				<a href="all_std.php">
					<button>All Student Living</button>
				</a>

				<a href="lev_std.php">
					<button>Leaved Students</button>
				</a>	

		</div>
	</div>

	<div class="section-2">
		<h1>Data From Website</h1>
		<div class="input-section">
			<form method="POST">
				 <div class="input-1">
				 	<input type="mobile" placeholder="Search Mobile Number" name="mobile" class="search-input">
				 	<button name="fetch">Search</button>

					 <?php

						include('connection.php');
						if (isset($_POST['fetch'])) {
							# code...
							$mobile_no = $_POST['mobile'];
							$query = "SELECT * FROM visitors WHERE mobile_no = '$mobile_no'";
							$query_run = mysqli_query($con, $query);

							while ($row = mysqli_fetch_array($query_run)) {
								# code...
								?>
								<div class="input1">
								 	
								 	
								 	<input type="text" placeholder="Enter your Name"  name="name" value="<?php echo $row['name']; ?>">
								 	<input type="text" placeholder="Enter Your Father Name.." name="father_name" value="<?php echo $row['father_name']; ?>" >
								 	<input type="text" placeholder="Enter Your Mother Name.."  name="mother_name" value="<?php echo $row['mother_name']; ?>" >
								 	<input type="text" placeholder="Enter your Email.." name="email" value="<?php echo $row['email']; ?>" >
								 	<input type="text" placeholder="Enter your Address.." name="address" value="<?php echo $row['address']; ?>" >
								 </div>
								 <div class="input-2">
								 	<input type="password" placeholder="Password.." name="pass" value="<?php echo $row['pass']; ?>" >
								 	<input type="text" placeholder="Confirm your Mobile Number.." name="mobile_no" value="<?php echo $row['mobile_no']; ?>" >
								 	<input type="text" placeholder="Membership" name="membership" value="<?php echo $row['membership']; ?>" >
								 	<input type="text" placeholder="charges" name="charges" value="<?php echo $row['charges']; ?>" >
								 	<input type="text" placeholder="Enter Your College" name="college" value="<?php echo $row['college']; ?>" >
								 	<select name="room_no" class="combo-box">

						          	<option>Select Room</option>

						          
								        <?php

											include("connection.php");
											$query = "select * from rooms where roomStatus = 'Not booked'";
											$data = mysqli_query($con, $query);
											$total = mysqli_num_rows($data);

											if($total != 0) {
												
												while($result = mysqli_fetch_assoc($data))
												{
													echo "<option>".$result['room_no']."</option>";
						
												}
											}
											else
											{
												echo "Data Not Found";
											}
										?>
						        	</select>
						        	<button class="btn" name="insert">submit</button>
						        	

								 </div>
								 <?php
							}
						}


					?>


				 

				 <?php
				          	include('connection.php');
				          	if (isset($_POST['insert'])) {
				          		# code...
				          		$name = $_POST['name'];
				          		$father_name = $_POST['father_name'];
				          		$mother_name = $_POST['mother_name'];
				          		$email = $_POST['email'];
				          		$address = $_POST['address'];
				          		$pass = $_POST['pass'];

				          		$mobile_no = $_POST['mobile_no'];
				          		$membership = $_POST['membership'];
				          		$charges = $_POST['charges'];
				          		$college = $_POST['college'];
				          		$room_no = $_POST['room_no'];

				          		if (!empty($name) && !empty($mobile_no)) {
				          			# code...
				          			$insert_query = "insert into new_std(name, father_name, mother_name, email, address, pass, room_no, mobile_no, membership, charges, college) values('$name', '$father_name', '$mother_name', '$email', '$address', '$pass', '$room_no', '$mobile_no', '$membership', '$charges', '$college')";
				          			mysqli_query($con, $insert_query);

				          			$query1 = "update rooms set roomStatus = 'Booked' where room_no = '$room_no'";
									mysqli_query($con, $query1);

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
</div>


</body>
</html>

