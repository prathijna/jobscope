<?php
session_start();
$email = $_SESSION['email'];

require_once('connection.php');
$home = "SELECT name FROM company WHERE email='$email'";
$connects = mysqli_query($conn,$home);

if(isset($_POST['submit']))
{
	header("Location: jobresult1.php");
}
elseif (isset($_POST['save'])) 
{
	header("Location: job.html");
}
elseif(isset($_POST['out']))
{
	header("Location: index.html");
}
else
{
	echo "";
}

?>

<html>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <body>
    <div class="header">
      <h1>
        JOBSCOPE
       <a href="index.html"> <button class="b1">Logout</button></a>
       
      </h1>
    </div>
    <div>
      <img src="6671.jpg" class="pic1" />
      <div class="inputBx">
    
		<p class="p1">Hi, <?php $rows = mysqli_fetch_assoc($connects);
		echo $rows['name']; ?></p>
	</div>
      <Text class="f2">Find Your Perfect Candidate</Text>
      <p class="f3">Click listed jobs to find all the jobs you have posted</p>
    </div>
	<div class="inputBx">
	<a href="jobresult1.php">	<input type="submit" value="Listed jobs" name="submit"> </a>
	</div>
    <Text class="f3"
      >You can add new job by using below provided Add a new job option
    </Text>
    <div class="inputBx">
       <a href="job.html"><input type="submit" value="+Add a new Job" name="Submit" /></a> 
      </div>
    <div class="footer">
      <p class="f4">JOBSCOPE</p>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-instagram"></a>
      <p class="f5">
        Designed and Developed by Prathijna DS, Rachana Nayak - @2022, All
        Rights Reserved.
      </p>
    </div>
  </body>
  <style>
   .header {
      text-align: left;
      background: #545885;
      color: white;
      font-size: 12px;
      padding: 3px;
      padding-left: 30px;
    }
    .center {
      align-items: center;
    }

    
    .b1 {
      float: right;
      background: none;
      border: none;
      font-size: 20px;
      padding-right: 20px;
	  color: white;
    }

    .p1 {
      display: block;
      margin-left: 150px;
      margin-right: auto;
      width: 50%;
      
      color: #545885;
      font-size: 50px;
    
    }
    .pic1 {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
     
    
    }
    .f1 {
      font-size: 25px;
      text-align: left;
      padding: 15px;
    }

    .f2 {
      font-size: 25px;
      margin-left: 138px;
      padding: 15px;
      color: #545885;
      font:bold;
    }

    .f3 {
      font-size: 20px;
      text-align: left;
      padding: 15px;
      padding-top: 20px;
      margin-left: 138px;
      color: #545885;
    }

    .b2 {
      background-color: mediumpurple;
      text-align: center;
      width: 150px;
      height: 30px;
      font-size: 15px;
    }
	.inputBx input[value="+Add a new Job"] {
 background-color: #545885;
  width: 370px;
  height: 44px;
  font-size: 25px;
  color: white;
  border-radius: 30px;
  margin-left: 500px;
  margin-top: 7px;
  margin-bottom: 10px;
  border: none;
  cursor: pointer;
  border-color: #545885;
 
}
.inputBx input[value="Listed jobs"] {
  background: #545885;
  width: 370px;
  height: 44px;
  font-size: 25px;
  color: white;
  border-radius: 30px;
  margin-left: 500px;
  margin-top: 20px;
  border: none;
  cursor: pointer;
  margin-bottom: 30px;
  
}
    .footer {
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: rgba(80, 77, 77, 0.541);
      color: white;
      text-align: center;
      padding-top: 5px;
    }
    .f4 {
      font-size: 30px;
      text-align: center;
      padding: 0;
    }
    .f5 {
      font-size: 15px;
      text-align: center;
    }
    .fa:hover {
      opacity: 0.7;
    }

    .fa-facebook {
      background: #3b5998;
      color: white;
    }

    .fa-twitter {
      background: #55acee;
      color: white;
    }
    .fa-instagram {
      background: #125688;
      color: white;
    }
    .fa {
      padding: 15px;
      font-size: 20px;
      width: 20px;
      text-align: center;
      text-decoration: none;
      border-radius: 50%;
    }
  </style>
</html>
