
<?php
session_start();

  $conn = mysqli_connect("localhost","root","","jobdb");
$EmpID=$_SESSION['EmpID'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$gender=$_SESSION['gender'];
$dob=$_SESSION['dob'];
$phone=$_SESSION['phone'];
$email=$_SESSION['email'];

  if($conn)
  {
    echo "connection successful";
 
  }
  else{
    echo "Error";
  }
 

  
    $jobid=$_GET['jobid'];
    $Title=$_GET['Title'];
    $cname=$_GET['cname'];
   
    $Salary=$_GET['Salary'];
    $Exprnce=$_GET['Exprnce'];
    $Eligibility=$_GET['Eligibility'];
    $City=$_GET['City'];
    $Description=$_GET['Description'];

    $query=mysqli_query($conn,"INSERT INTO `applied`(`jobid`, `Title`,`Salary`,`Exprnce`,`Eligibility`,`City`,`Description`,`EmpID`,`cname`, `fname`, `lname`, `gender`, `dob`, `phone`, `email`) VALUES ('$jobid','$Title','$Salary','$Exprnce','$Eligibility','$City','$Description','$EmpID','$cname','$fname','$lname','$gender','$dob','$phone','$email') ");
  
  
 $connect = mysqli_query($conn,$query);
  

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Applied</title>
</head>
<body> 
    <h1>YOU APPLIED SUCCESSFULLY  BOLD AND BIGGG</h1>
    <p>wait for the reply</p>
    <p>BACK</p>
</body>
</html>