<?php

require_once('connection.php');

$fname = $lname = $dob = $gender = $age = $address = $phone = $email = $TenthMarks = $TwelthhMarks = $Highest_qualification = $Marks = $passwd= '';
   $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
	$TenthMarks = $_POST['TenthMarks'];
	$TwelthhMarks = $_POST['TwelthhMarks'];
	$Highest_qualification = $_POST['Highest_qualification'];
	$Marks = $_POST['Marks'];
	$passwd = ($_POST['passwd']);


$sql  = "INSERT INTO `employee`(`fname`, `lname`, `dob`, `gender`, `age`, `address`, `phone`, `email`, `TenthMarks`, `TwelthhMarks`, `Highest_qualification`, `Marks`, `passwd`) VALUES ('$fname','$lname','$dob','$gender','$age','$address','$phone','$email','$TenthMarks','$TwelthhMarks','$Highest_qualification','$Marks','$passwd')";


$result = mysqli_query($conn,$sql);

if($result)
{
	header("Location: userlogin.html");
}
else
{
	echo "Error :".$sql;
}

?>