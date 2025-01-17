<!DOCTYPE html>
<html>
<head>
	<title>Student data | Student Login</title>
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

	button{
		margin-top: 30px;
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

	table {

	  	font-family: arial, sans-serif;
	  	border-collapse: collapse;
	  	width: 90%;
	  	position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		overflow-y: auto;

	}

	td, th {
	  border: 1px solid black;
	  text-align: left;
	  padding: 8px;

	}



</style>
<body>

	<div class="container">
		<a href="std_home.php"><button><< Go back</button></a>
		<div class="section">
			<form method="POST">
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
					$query = "select * from new_std where status = 'living'";
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

			</form>
			
		</div>
	</div>

</body>
</html>