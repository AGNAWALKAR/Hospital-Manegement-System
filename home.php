<?php



?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	
</head>

<style type="text/css">
*{
	padding: 0;
	margin: 0;
	
}
body{

	background-image: url('bg.jpg');
	background-repeat: no-repeat;
	background-size: cover;

}

.info-login a{

	width: 100px;
	height: 50px;


}

.middle-part{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: white;
	text-align: center;



}
.middle-part h1{

	font-size: 55px;
}

.btn-1{
	margin-top: 10px;
	padding: 8px 22px;
	margin-left: -50px;
	cursor: pointer;
	border: 2px solid black;

}
.btn-1:hover{
	font-size: 20px;
	transition: 0.4s;
}
.btn-2{
	margin-top: 10px;
	padding: 8px 22px;
	margin-left: 50px;
	cursor: pointer;
	border: 2px solid black;
}
.btn-2:hover{
	font-size: 20px;
	transition: 0.4s;
}

.info-section{
	position: absolute;
	margin-top: 25%;
	margin-left: 300px;

}

.info-section .info-box{

}

.info-section .info-box a{
	margin-top: 400px;
	margin-left: 450px;
}

.info-section .info-box button{
	padding: 10px 20px;	
	cursor: pointer;
}



</style>

<body>

	<div class="body">
		

		<div class="middle-part">
			<h1>Hostel Management System</h1>
			<h2>Hostel | Paying guest | Rent Room</h2>
			<a href="ad_login.php">
				
				<button class="btn-1">Admin login</button>
				
			</a>
			<a href="std_login.php">
				
				<button class="btn-2">Student login</button>
				
			</a>
			
			<div class="info-section">
				<div class="info-box">
					
					
					<a href="web_charges.php">
						<button>More Informaton >></button>
					</a>

				</div>
			</div>
		

   		
	</div>
	
	

</body>
</html>