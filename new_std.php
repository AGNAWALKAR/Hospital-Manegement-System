<!DOCTYPE html>
<html>
<head>
	<title>New Student | Rajgad</title>
</head>

<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}

	.container{
		width: 100%;
		height: 100vh;
		background-color: black;
	}

	.section-1{
		width: 30%;
		height: 100vh;
		background-color: red;
		float: left;
	}

	.section-left{
		float: left;
		width: 100%;
		height: 100vh;
		background-color: red;
		text-align: center;
	}

	.section-left button{
		margin-top: 75px;
		text-align: center;
		width: 90%;
		padding: 5px 10px;
		border-radius: 5px;
		cursor: pointer;
		
	}

	.section-2{
		width: 70%;
		height: 100vh;
		background-color: #00FFFF;
		float: right;
	}

	.section-2 img{
		position: absolute;
		top: 61%;
		left: 85%;
		transform: translate(-50%, -50%);

	}

	.btn-section{
		width: 50%;
		height: 50vh;
		text-align: center;

	}

	.btn-section h3{
		padding-top: 150px;
		padding-bottom: 30px;
	}
	.btn-section button{
		
		padding: 10px 40px;
		cursor: pointer;
	}

	.btn-section1{
		width: 50%;
		height: 50vh;
		text-align: center;

	}

	.btn-section1 h3{
		padding-top: 150px;
		padding-bottom: 30px;
	}
	.btn-section1 button{
		
		padding: 10px 40px;
		cursor: pointer;
	}

</style>

<body>
	<div class="container">
		<div class="section-1">
			<div class="section-left">
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
			<div class="btn-section"> 
				<h3>To push the data of website use below button</h3>
				<a href="testnew_std.php">
					<button>Submit</button>
				</a>

				

			</div>

			<div class="btn-section1"> 

				<h3>To insert the data manually use below button</h3>
				<a href="new_std_ind.php">
					<button>Insert data manually</button>
				</a>

				

			</div>



			<img src="new_std.png">
		</div>
	</div>
</body>
</html>