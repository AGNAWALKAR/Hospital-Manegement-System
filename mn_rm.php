<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if(isset($_POST['insert']))
	{
		//something was posted
		$room_no = $_POST['room_no'];
		$status = $_POST['status'];
	

		if(!empty($room_no) && !empty($status))
		{

			//save to database
			
			$query = "insert into rooms (room_no, status) values ('$room_no','$status')";

			mysqli_query($con, $query);
			header("Location: mn_rm.php");

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
	<title>Students Data | Admin</title>
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
	background-color: rgb(0,255,255,0.5);
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
	background-size: cover;
	background-repeat: no-repeat;
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
	color: white;

}

.table-section h1{
	text-align: center;

}

.table-section table{
	margin-top: 4%;

	font-family: arial, sans-serif;
  	border-collapse: collapse;
  	width: 90%;
  	position: absolute;
	top: 70%;
	left: 50%;
	transform: translate(-50%, -50%);
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

.input-section{
	
}

.input-section .text{
	margin-top: 3%;
	margin-left: 10px;
	margin-right: 20px;
}

.input-section .text3{
	margin-top: 3%;
	margin-left: 10px;
	margin-right: 20px;
}

.input-section button{
	margin-left: 4%;
	width: 100px;
	height: 30px;
	cursor: pointer;

}

.input-section h2{
	margin-top: 5%;
}


table .edit{
  	background-color: none;
  	width: 100px;
  	height: 25px;	
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: ;
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

				<a href="Fees.php">
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
				
				<h1>Manage Rooms</h1>
				<form method="POST">
					<div class="input-section">
					<h3>Create Room</h3>
					<label>Room No: </label>
					<input type="text" name="room_no" class="text">

					<label>Active Status : </label>
					<input type="text" name="status" class="text2">

					<button name="insert">Create</button>
				</form>
					<h2>Update Room Data</h2>
					<form  method="GET">
						<label>Room No: </label>
						<input type="text" name="room_no1" class="text3">

						<label>Active Status : </label>
						<input type="text" name="status1" class="text4">

						<button name="update">Update</button>


						<?php 
							

								include("connection.php");

								if(isset($_GET['update']))
								{
									//something was posted
									
									$status = $_GET['status1'];
									$room_no1 = $_GET['room_no1'];



									if(!empty($room_no1))
									{

										//save to database
										
										$query = "update rooms set status = '$status' where room_no = $room_no1";

										mysqli_query($con, $query);
										header("Location: mn_rm.php");

										die;
									}

									else
									{

										echo "Trouble in deleting";

									}
								}


								else{
									
								}
					?>


						
					<div class="del-btn">	
						
						<button name="delete">Delete room</button>

					</div>

					</form>
					
					

					<?php 
							

								include("connection.php");

								if(isset($_GET['delete']))
								{
									//something was posted
									
									$room_no1 = $_GET['room_no1'];


									if(!empty($room_no1))
									{

										//save to database
										
										$query = "delete from rooms where room_no = $room_no1";

										mysqli_query($con, $query);
										header("Location: mn_rm.php");

										die;
									}

									else
									{

										echo "Trouble in deleting";

									}
								}


								else{
									
								}
					?>

				</div>

				

				<table>
				  <tr>
				    <th>Room Number</th>
				    <th>Active Status</th>
				    <th>Room Status</th>
				    <th>Edit</th>
				  </tr>
				  <?php

					include("connection.php");
					$query = "select * from rooms";
					$data = mysqli_query($con, $query);
					$total = mysqli_num_rows($data);
					

					if($total != 0) {
						
						while($result = mysqli_fetch_assoc($data))
						{
							echo "<tr> 
							<td>".$result['room_no']."</td>
							<td>".$result['status']."</td>
							<td>".$result['roomStatus']."</td>
							<td>
							<a href='new_std.php?rm=$result[room_no] st=$result[status] rs=$result[roomStatus]'>Edit</a>
							</td>
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
