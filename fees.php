<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$fees = $_POST['fees'];
		$month = $_POST['month'];
		$room_no = $_POST['room_no'];
		$mobile_no = $_POST['mobile_no'];
		if(!empty($name) && !empty($email) && !empty($fees) && !empty($month) && !empty($room_no) && !empty($mobile_no))
		{

			//save to database
			
			$query = "insert into fees (name, email, fees, month, room_no, mobile_no) values ('$name', '$email','$fees','$month','$room_no','$mobile_no')";

			mysqli_query($con, $query);
			header("Location: fees.php");

			die;
		}else
		{
			echo "Data is not pushed";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student's Fees | Admin</title>
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

.reg-mob{
	display: flex;
	justify-content: space-between;
	margin-top: -60px;
	padding-left: 20px;


}

.reg-mob button{
	width: 100px;

}

.reg-mob .register{
	margin-left: 0px;
	width: 150px;
	position: absolute;
}

.reg-mob .contact{
	margin-left: -50px;
}

.section-2{
	float: right;
	width: 70%;
	height: 100%;
	background: rgb(0, 0, 0, 0.9);
	color: white;
	position: relative;
	
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
	width: 80;
	height: 45%;
	background-color: transparent;
	text-align: center;


}

.del-btn{
	margin-top: 3%;
}

.input-section .txt{
	margin-top: 3%;
	margin-left: 10px;
	margin-right: 20px;
}

.text1{
	margin-right: 110px;
}

.text2{
	margin-right: 50px;

}

.input-section button{
	margin-top: 4%;
	width: 100px;
	height: 30px;
	cursor: pointer;

}

.input-section h2{
	margin-top: 5%;
}


table {
	position: absolute;
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

				<div class="reg-mob">
					

					<a href="sign-up.php">
					<button class="register">Register Admin</button>
					</a>

					<a href="contact_us.php">
						<button class="contact">Contact Us</button>
					</a>


				</div>

				
				

			</div>
			
		</div>
		<div class="section-2">

			<div class="table-section">
				
				<h1>Manage Rooms</h1>
				<form method="POST">
					<div class="input-section">
						<h3>Fees's Section</h3>
						<div class="txt">
							<label>Name: </label>
							<input type="text" name="name" class="text1">

							<label>Email : </label>
							<input type="text" name="email">
						</div>
						<div class="txt">
							<label>Fees: </label>
							<input type="text" name="fees" class="text1">

							<label>Month: </label>
							<input type="text" name="month">
						</div>
						<div class="txt">

							<label>Room Number: </label>
							<input type="text" name="room_no" class="text2">

							<label>Mobile Number : </label>
							<input type="text" name="mobile_no" class="text2">


						</div>	
						

						<button>Submit</button>
					</div>

				</form>
					

		    </div>
				

				<table>
				  <tr>
				    <th>Name</th>
				    <th>Email</th>
				    <th>Fees</th>
				    <th>Month</th>				    
				    <th>Room Number</th>
				    <th>Mobile Number</th>
				    
				  </tr>
				  <?php

					include("connection.php");
					$query = "select * from fees";
					$data = mysqli_query($con, $query);
					$total = mysqli_num_rows($data);

					if($total != 0) {
						
						while($result = mysqli_fetch_assoc($data))
						{
							echo "<tr>
							<td>".$result['name']."</td>							
							<td>".$result['email']."</td>
							<td>".$result['fees']."</td>
							<td>".$result['month']."</td>							
							<td>".$result['room_no']."</td>
							<td>".$result['mobile_no']."</td>
							</tr>"
							;
						}
					}
					else
					{
						echo "Data Not Found";
					}

				?>
				</table>
			</div>
				
		</div>
		

	</div>


</body>
</html>
