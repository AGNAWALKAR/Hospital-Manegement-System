
<!DOCTYPE html>
<html>
<head>
	<title>New Student | Admin</title>
	<link rel="stylesheet" type="text/css" href="lol.css">
<style type="text/css">
	*{
	margin: 0px;
	padding: 0px;

}


.container{
	width: 100%;
	height: 100vh;
}

.section{
	width: 100%;
	
}

.section-1{
	float: left;
	width: 30%;
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

.section-2{
	float: right;
	width: 70%;
	height: 100%;
	background: rgb(0, 0, 0, 0.9);
	position: relative;
	color: white;
	

}

.section-2 .input-section{
	margin-top: 10px;	
	background-color: white;
	border-radius: 20px;
}

.section-2 .table-section{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	background-color: transparent;
	width: 90%;
	height: 90%;

}


.table-section h1{
	text-align: center;

}

.input-section{
	width: 100%;
	height: 260px;
	text-align: center;


}

.del-btn{
	margin-top: 3%;
}


.text1{
	margin-right: 100px;
}


.input-section button{
	margin-top: 20px;
	width: 100px;
	height: 30px;
	cursor: pointer;
	margin-bottom: 10px;
	border-radius: 10px;
	
	

}
.input-section{
	display: flex;
	flex-wrap: wrap;
	width: 100%;
	height: 40vh;
	background-color: grey;
	justify-content: center;


}

.input-section .input-box{
	width: calc(100% / 2 - 20px);

}

.input-section input{
  margin-top: 10px;
  height: 40px;
  width: 70%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.input-box button{
	position: absolute;
	margin-left: 10px;
	padding-bottom: 5px 20px;
	border-radius: 15px;
	text-align: center;
	cursor: pointer;


}


.input-box button::after{
	display: none;
}

table {

  	font-family: arial, sans-serif;
  	border-collapse: collapse;
  	width: 90%;
  	position: absolute;
	top: 75%;
	left: 50%;
	transform: translate(-50%, -50%);
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: transparent;
}

.input-section a{

	padding: 10px, 30px;
	text-decoration: none;

}

</style>
</head>
<body>

	<div class="container">
		
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

			<div class="table-section">
				
				<h1>Update Student</h1>
				<form method="POST">
					<div class="input-section">
						

						<div class="input-box">
		            
				            <input type="text" placeholder="Mobile Number" name="mobile_no" required >

				            <button name="search"> Search</button>
				            
			           </div>

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

			           					  <div class="input-box">
				            
								            <input type="text" placeholder="Enter your Email" value="<?php echo $row['email']; ?>" name="email" required>
								          </div>

								          <div class="input-box">
								            
								            <input type="text" placeholder="Enter your Name" value="<?php echo $row['name']; ?>" name="name" required>
								          </div>

								          <div class="input-box">
								            
								            <input type="text" placeholder="Enter your Address" value="<?php echo $row['address']; ?>" name="address" required>
								          </div>

								          <div class="input-box">
								            
								            <input type="text" placeholder="Enter your Father's Name" value="<?php echo $row['father_name']; ?>" name="father_name" required>
								          </div>

								          <div class="input-box">
								            
								            <input type="text" placeholder="Confirm your College" value="<?php echo $row['pass']; ?>" name="college" required>
								          </div>

								          <div class="input-box">
								            
								            <input type="text" placeholder="Enter your Mother's Name" value="<?php echo $row['mother_name']; ?>" name="mother_name" required>
								          </div>

								          <div class="input-box">
								            
								            <input type="text" placeholder="Confirm your Room Number" value="<?php echo $row['room_no']; ?>" name="room_no" required>
								          </div>

								          <div class="input-box">
								            
								            <input type="text" placeholder="Confirm your status" value="<?php echo $row['status']; ?>" name="status" required>
								          </div>

			           					<?php
			           					}
				           			}
				           			else{
				           				echo "No records found";
				           			}


			           		}
			           		else{
			           				echo "Got some error brooo";
			           		}



			           ?>

 						 
			           
				         


				         <?php 
							

								include("connection.php");

								


								if(isset($_POST['update']))
								{
									//something was posted
									$name = $_POST['name'];
									$father_name = $_POST['father_name'];
									$mother_name = $_POST['mother_name'];
									$email = $_POST['email'];
									$address = $_POST['address'];
									$college = $_POST['college'];
									$room_no = $_POST['room_no'];
									$mobile_no = $_POST['mobile_no'];
									$status = $_POST['status'];

									if(!empty($room_no))
									{

										//save to database
										
										$query = "update new_std set name = '$name', father_name = '$father_name', mother_name = '$mother_name', email = '$email', address = '$address', college = '$college', room_no = '$room_no', status = '$status' where mobile_no = $mobile_no";

										mysqli_query($con, $query);
										header("Location: up_std.php");

										die;
									}else
									{
										echo "Data is not pushed";
									}
								}
								else{
									echo "";
								}
						?>

				          <button name="update"> Update </button>

				          




				          <button name="delete"> Delete </button>

				          <?php 
							

								include("connection.php");

								


								if(isset($_POST['delete']))
								{
									//something was posted
									
									$mobile_no = $_POST['mobile_no'];

									if(!empty($mobile_no))
									{

										//save to database
										
										$query = "delete from new_std where mobile_no = $mobile_no";

										mysqli_query($con, $query);
										header("Location: up_std.php");

										die;
									}else
									{
										echo "Data is not pushed";
									}
								}
								else{
									echo "error in delete query";
								}
							?>


							
						

						
					</div>

				</form>
					

		    </div>
				

				
			</div>
				
		</div>
		

	</div>


</body>
</html>
						