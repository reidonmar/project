<?php
include ('connection.php');
if(isset($_POST["login"])){
	$emailadd = stripscslashes($_POST["Email Add"]);
	$password = stripscslashes($_POST["password"]);
	$emailadd = mysqli_real_ecape_string($conn,$_POST["Email Add"]);
	$password = mysqli_real_ecape_string($conn,$_POST["password]);
	$sql = "select * from the user where emailadd = '$emailadd' and Password ='$password'";
	$resultSet = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($resultSet);
	if ($count==1) {
		header('Location:index1.php');
	}
	else{
		header('Location:login.php');
	}
}
else{
	echo "user is not authenticated";
}
?>
