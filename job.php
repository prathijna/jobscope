<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "jobdb";


$conn = mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
$cid=$_SESSION['cid'];
$name=$_SESSION['name'];

if(!$conn)
{
	die("connection failed:" . mysqli_connect_error());
}

if(isset($_POST['Update']))
{
	$Title = $_POST['Title'];
	$Hour = $_POST['Hour'];
	$Salary = $_POST['Salary'];
	$Exprnce = $_POST['Exprnce'];
	$Eligibility = $_POST['Eligibility'];
	$City = $_POST['City'];
    $Description = $_POST['Description'];
	

	$sql_query = "INSERT INTO `job`(`Title`, `Hour`, `Salary`, `Exprnce`, `Eligibility`, `City`, `Description`,`cid`,`name`)
	VALUES ('$Title','$Hour','$Salary','$Exprnce','$Eligibility','$City','$Description','$cid','$name')";
	if(mysqli_query($conn,$sql_query))
	{
	echo "New Details entry inserted successfully !";
	}
	else
	{
		echo "Error: " . $sql_query . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}

?>