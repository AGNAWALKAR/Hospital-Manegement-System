
<!DOCTYPE html>
<html>
<head>
	<title>Home | Admin</title>
	
</head>
<style type="text/css">
	*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body{
	background-image: url('bg1.jpg');
	background-repeat: no-repeat;
	background-size: cover;

}

.btn-space{
	height: 100vh;
	width: 30%;	
	float: left;
}

.btn{
	padding-top: 70px;
	width: 100%;
	text-align: center;
	
}

.btn .lol{
	width: 90%;
	height: 35px;
	cursor: pointer;
	border-radius: 10px;

}


.section-2{
	float: right;
	width: 70%;
	height: 100vh;
	background-color: transparent;

}

.section-2 .in-section{
	
	position: absolute;
	top: 50%;
	left: 50%;
	margin-left: 15%;
	
	


}


.section-2 h1{

	font-size: 70px;

}

.section-2 .reg-mob{
	float: right;
	margin-right: 3%;
	margin-top: 2%;
	
}

.reg-mob .register{

	margin-right: 60px;
	padding: 10px 30px;
	border-radius: 10px;
	cursor: pointer;
	
}

.reg-mob .contact{

	
	padding: 10px 30px;
	border-radius: 10px;
	cursor: pointer;
	
}


</style>

<body>

	<div class="body">
			<div class="btn-space">

				<div class="btn">
					<a href="mn_rm.php">
						<button class="lol">Manage Room</button>
					</a>
				
				</div>

				<div class="btn">
					<a href="new_std.php">
						<button class="lol">New Student</button>
					</a>
				</div>

				<div class="btn">
					<a href="up_std.php">
						<button class="lol">Update Student Data</button>
					</a>
				</div>

				<div class="btn">
					<a href="fees.php">
						<button class="lol">Fees</button>
					</a>
				</div>

				<div class="btn">
					<a href="all_std.php">
						<button class="lol">Living Students</button>
		
					</a>
				</div>

				<div class="btn">
					<a href="lev_std.php">
						<button class="lol">Leaved Students</button>
					</a>
				</div>



				
			
			</div>	
			<div class="section-2">

				<div class="section">
					

					<div class="in-section">
					
						<h1>Rajgad Hostel</h1>
						<h2>SIMCA, Narhe</h2>
						


					</div>

					
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
	</div>

</body>
</html>
