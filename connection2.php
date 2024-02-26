<?php
	$email = $_POST['Email Address'];
	$password = $_POST['Password'];
	$Confirm password = $_POST['Confirm password']

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration( email, password, Confirm password) values(?, ?, ?)");
		$stmt->bind_param("sssssi", $Email Address, $Password, $Confirm password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>