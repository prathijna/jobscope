<?php
require_once('connection.php');


$name = $address = $location = $sector = $website = $phone = $email = $passwd= '';

$name = $_POST['name'];
$address = $_POST['address'];
$location = $_POST['location'];
$sector = $_POST['sector'];
$website = $_POST['website'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];

$sql  = "INSERT INTO `company`( `name`, `address`, `location`, `sector`, `website`, `phone`, `email`, `passwd`) 
VALUES ('$name','$address','$location','$sector','$website','$phone','$email','$passwd')";

$result = mysqli_query($conn,$sql);

if($result)
{
	header("Location: company.html");
}
else
{
	echo "Error :".$sql;
}
?>