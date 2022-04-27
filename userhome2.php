




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
    echo "";
 
  }
  else{
    echo "Error";
  }
 

  if(isset($_GET['jobid'],$_GET['Title'])){
    $jobid=$_GET['jobid'];
    $Title=$_GET['Title'];
    $insert=mysqli_query($conn,"INSERT INTO `applied`(`jobid`, `Title`, `EmpID`, `fname`, `lname`, `gender`, `dob`, `phone`, `email`) VALUES ('$jobid','$Title','$EmpID','$fname','$lname','$gender','$dob','$phone','$email') ");
  }
  $query = "SELECT * FROM `job` ";
 $connect = mysqli_query($conn,$query);
  $num = mysqli_num_rows($connect);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>JOB Result Page</title>
	<link rel="stylesheet" type="text/css" href="userhome2.css">
</head>
<body>
    
	<div class="topnav">
		<h1>JOBSCOPE</h1>
	</div>
    <form action="userhome2.php" method="post">
	<div  >
        <table style="margin-right: auto;margin-left:auto;" >
            <thead>
                <tr>
                   <th>COMPANY NAME</th>
                    <th>JOB TITLE</th>
                    <th>WORKING HOUR</th>
                    
                    <th>SALARY</th>
                    <th>EXPEREINCE</th>
                    <th>ELIGIBILITY</th>
                    <th>CITY</th>
                    <th>DESCRIPTION</th>
                   
                    <th> </th>
                    
                </tr>
            </thead>
</div>
            <?php
                  if($num > 0)
                  {
                    while(  $data = mysqli_fetch_assoc($connect))
                    {
                        echo "
                            <tr>
                            <td>".$data['name']."</td>
                            <td>".$data['Title']."</td>
                            <td>".$data['Hour']."</td>
                            <td>".$data['Salary']."</td>
                            <td>".$data['Exprnce']."</td>
                            <td>".$data['Eligibility']."</td>
                           
                            <td>".$data['City']."</td>
                            <td>".$data['Description']."</td>
                            
                            <td><button><a href='status.html>?jobid=$data[jobid] & Title=$data[Title] & cname=$data[name]  & Salary=$data[Salary] & Exprnce=$data[Exprnce] & Eligibility=$data[Eligibility] & City=$data[City] & Description=$data[Description] 'class='statue'>APPLY</button></a></td>

                             
                            </tr>";

                    }
                  }
                ?>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  <td></td>
                  <td></td>
                     
                    
                </tr>

                               
            </tbody>
        </table>
        </form>
       



    </div>


</body>
</html>