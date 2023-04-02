<?php
include ('connection.php');
if (isset($_POST["create"])) {
	$FirstName 	=mysqli_real_escape_string($conn,$_POST["FirstName"]);
	$LastName 	=mysqli_real_escape_string($conn,$_POST["LastName"]);
	$UserName 	=mysqli_real_escape_string($conn,$_POST["UserName"]);
	$Password 	=mysqli_real_escape_string($conn,$_POST["Password"]);
	$Age 		=mysqli_real_escape_string($conn,$_POST["Age"]);
	$Address 	=mysqli_real_escape_string($conn,$_POST["Address"]);

	$sql ="insert into useraccounts(FirstName,LastName,Password,Username,Age,Address) values('$FirstName','$LastName','$Userame','$Password',$Age','$Address')";
	if(mysqli_query($conn,$sql)) {
		echo "Record inserted successfully"."<br>";
		echo mysqli_insert_id($conn);
		header("location:index1.php");
	}else{
		echo "There is an issue inserting the record";
	}
	mysqli_close($conn);	
}
if (isset($_POST["createemp"])) {
	$EmployeeName =mysqli_real_escape_string($conn,$_POST["EmployeeName"]);
	$gender =mysqli_real_escape_string($conn,$_POST["gender"]);
	$age =mysqli_real_escape_string($conn,$_POST["Age"]);
	$address =mysqli_real_escape_string($conn,$_POST["Address"]);
	$sql ="insert into employee(EmployeeName,gender,Age,Address) values('$EmployeeName','$gender','$age', '$address')";
	if(mysqli_query($conn,$sql)) {
		echo "Record inserted successfully"."<br>";
		echo mysqli_insert_id($conn);
		header("Location:index1.php");
	}else{
		echo "There is an issue inserting the record";
	}
	mysqli_close($conn);
	}
	if (isset($_POST["updateemp"])) {
	$EmployeeName =mysqli_real_escape_string($conn,$_POST["EmployeeName"]);
	$gender =mysqli_real_escape_string($conn,$_POST["gender"]);
	$age =mysqli_real_escape_string($conn,$_POST["Age"]);
	$address =mysqli_real_escape_string($conn,$_POST["Address"]);
	$id = mysqli_real_escape_string($conn,$_POST["id"]);
	$sql ="update employee set EmployeeName = '$EmployeeName',gender='$gender', age='$age', address= '$address' where id = '$id'";
	echo $sql;
	if(mysqli_query($conn,$sql)) {
		//echo "Record inserted successfully"."<br>";
		echo mysqli_insert_id($conn);
		header("Location:index1.php");
	}else{
		echo "There is an issue inserting the record";
	}
	mysqli_close($conn);
	}
	//echo "Nothing works"
?>