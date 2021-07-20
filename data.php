<?php
	$server="localhost";
	$username="root";
	$password="";
	$db="employeedetails";
	$conn=mysqli_connect($server,$username,$password,$db);
	if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
	$EmpName=$_POST['EmpName'];
	$Address=$_POST['Add'];
	$Salary=$_POST['sal'];
	$query="INSERT into userdetails(name,address,salary) values('$EmpName','$Address','$Salary')";
	$res=mysqli_query($conn,$query);
	if($res>0){
		header('location:index1.php');
	}
	else{
		echo"data is not inserted";
	}

?>