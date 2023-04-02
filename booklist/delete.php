<?php
$id= $_GET['id'];
if ($id){
	include('connection.php');
	$sql = "Delete from employee where id ='$id'";
	if(mysqli_query($conn,$sql)){
		echo "record deleted"."<br>";
		header("Location:index1.php");
	}else{
	echo "There was an issue in inserting the record";
}
mysqli_close($conn);
}
?>