<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<style type="text/css">
	

	body{
		background-color: #00FFFF;
	}

	h1{
		text-align: center;
	}

	.section{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 80%;
		height: 80vh;
		background-color: grey;
		border-radius: 30px;
	}

	.scroll-bar{
		height: 100%;
		overflow-y: auto;

	}

	table{
		padding: 20px;

	}


	table  tr{
		padding-left: 100px;
	}

	td, th {
	  border: 1px solid #dddddd;
	  text-align: center;
	  padding: 8px;
	}

</style>

<body>

	<h1>Information From Web</h1>

	<div class="section">
		<div class="scroll-bar">
		
			<table>
				
				<tr>
					<th>Name</th>
				    <th>Father's Name</th>
				    <th>Mother's Name</th>
					<th>Email</th>
				    <th>Address</th>
				    <th>Mobile Number</th>
				    <th>Password</th>				    
				   <th>Type</th>
				   <th>Gender</th>
				    
					    
				 </tr>


				 <?php

							include("connection.php");
							$query = "select * from visitors";
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
									
									<td>".$result['mobile_no']."</td>
									<td>".$result['pass']."</td>
									<td>".$result['type']."</td>
									<td>".$result['gender']."</td>
									
									

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


</body>
</html>