<?php
include_once 'database.php';

	 
	 $first_name = $_POST['name'];
	 $last_name = $_POST['last_name'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 
	 $gender = $_POST['gender'];
	 $sql = "INSERT INTO UserInfo
	 VALUES ('$first_name','$last_name','$email',MD5('$password'),'$gender')";
	 if (mysqli_query($conn, $sql)) {
		echo("<script>location.href = 'welcomePage.php';</script>");
	 } else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);

?>