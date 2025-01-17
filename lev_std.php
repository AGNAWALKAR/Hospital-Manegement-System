<!DOCTYPE html>
<html>
<head>
	<title>Students Data | Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
	background-color: rgb(0,0,0,6);
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

table {
	color: white;
  	font-family: arial, sans-serif;
  	border-collapse: collapse;
  	width: 90%;
  	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
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

				
				

			</div>
			
		</div>
		<div class="section-2">

			<div class="table-section">
				
				<h1>Students Data</h1>

				<table>
				  <tr>
				    <th>Name</th>
				    <th>Father's Name</th>
				    <th>Mother's Name</th>
				    <th>Email ID</th>
				    <th>Address</th>
				    <th>Room Number</th>
				    <th>Contact Number</th>	
				  </tr>
				  <?php

					include("connection.php");
					$query = "select * from new_std where status = 'leaved'";
					$data = mysqli_query($con, $query);
					$total = mysqli_num_rows($data);

					if($total != 0) {
						
						while($result = mysqli_fetch_assoc($data))
						{
							echo "<tr>
							<td>".$result['name']."</td>
							<td>".$result['father_name']."</td>
							<td>".$result['mother_name']."</td>						
							<td>".$result['email']."</td>
							<td>".$result['address']."</td>
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
