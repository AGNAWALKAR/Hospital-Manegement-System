<?php

	$name = $_POST['username'];
	$password = $_POST['password'];

	//Database Connection
	$conn = new mysqli('localhost','root','','hostel');

	if($conn->connect_error){
		die('Got some error'.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into test(username, password) values(?,?)");
		$stmt->bind_param("ss",$name, $password);
		$stmt->execute();
		echo "Database Connected";
		$stmt->close();

	}

?>