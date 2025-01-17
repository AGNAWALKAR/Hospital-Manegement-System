<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
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

		if(!empty($name) && !empty($father_name))
		{

			//save to database
			
			$query = "update new_std set name = '$name', 
			father_name = '$father_name', 
			mother_name = '$mother_name' ,
			email = '$email', 
			address = '$address', 
			college = '$college',
			room_no = '$room_no',
			mobile_no = '$mobile_no' 

			where mobile_no = $mobile_no";

			mysqli_query($con, $query);
			header("Location: up_std.php");

			die;
		}else
		{
			echo "Data is not pushed";
		}
	}
?>