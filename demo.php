<?php
include 'connect.php';
error_reporting(0);
if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
	$TenthMarks = $_POST['TenthMarks'];
	$TwelfthMarks = $_POST['TwelfthMarks'];
	$Highest_qualification = $_POST['Highest_qualification'];
	$marks = $_POST['marks'];
	$passwd = md5($_POST['passwd']);
	
	$sql_query = "INSERT INTO `employee`(`fname`, `lname`, `dob`, `gender`, `age`, `address`, `phone`, `email`, `TenthMarks`, `TwelfthMarks`, `Highest_qualification`, `marks`, `passwd`) VALUES 
  ('$fname','$lname','$dob','$gender','$age','$address','$phone','$email','$TenthMarks','$TwelfthMarks','$Highest_qualification','$marks','$passwd')";
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    
    <link rel="stylesheet" href="user_registration.css">
    <title>Document</title>
  </head>
  <body>
    <section>
      <div class="contentbx">
        <div class="formbx">
          <form action="" method="POST">
            <h1>JOBSCOPE</h1>
            <h2>Register</h2>
            <div class="inputbx">
              <p>First Name</p>
              <input type="text" name="fname">
            </div>
            <div class="inputbx">
              <p>Last Name</p>
              <input type="text" name="lname">
            </div>
            <div class="inputbx">
              <p>Date of Birth</p>
              <input type="date" name="dob">
            </div>
            <div class="inputbx">
              <p>Gender</p>
              <span style="color: #545885">Male</span>
              <input type="radio" id="male" name="gender" value="Male">

              <span style="color: #545885">Female</span>

              <input
                type="radio"
                id="female"
                name="gender"
                value="Female"
                checked>
            </div>
            <div class="inputbx">
              <p>Age</p>
              <input type="number" name="age">
            </div>
            <div class="inputbx">
              <p>Address</p>
              <input type="text" name="address">
            </div>
            <div class="inputbx">
              <p>Phone no</p>
              <input type="number" name="phone">
            </div>
            <div class="inputbx">
              <p>Email address</p>
              <input type="email" name="email">
            </div>
            <div class="inputbx">
              <p>10th Marks</p>
              <input type="number" name="TenthMarks">
            </div>
            <div class="inputbx">
              <p>12th Marks</p>
              <input type="number" name="TwelfthMarks">
            </div>
            <div class="inputbx">
              <p>Highest Qualification</p>
              <input type="text" name="Highest_qualification">
            </div>
            <div class="inputbx">
              <p>Highest Qualification Marks in % or CGPA</p>
              <input type="number" name="marks">
            </div>
            <div class="inputbx">
              <p>Password</p>
              <input type="password" name="passwd">
            </div>
            <div class="inputbx">
              <p>Confirm Password</p>
              <input type="password" name="cpassword">
            </div>
            <div class="inputbx">
              <div id="logx">
                <input type="submit" value="Register" name="submit">
              </div>
            </div>
            <div class="inputbx">
              <p style="position: relative; left: 51%">
                Seen this page before?
              </p>
              <input type="submit" value="Login" name="">
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>