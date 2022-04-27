<?php

session_start();
$email = $_SESSION['email'];

require_once('connection.php');
$uhome = "SELECT fname FROM employee WHERE email='$email'";
$connects = mysqli_query($conn,$uhome);



?>
<!DOCTYPE html>
<html>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <head>
    <meta charset="utf-8" />
    <title>Front Page</title>
   
  </head>
  <body>
    
  <div class="header">
      <h1>
        JOBSCOPE
       <a href="index.html"> <button class="b1">Logout</button></a>
       <a href="user_viewmsg.php"> <button class="b1">Message</button></a>
      </h1>
    </div>
        <div class="inputBx">
		
	    <img src="Project_71-01.jpg" class="p1" />
  
      <div class="inputBx">
    
		<p class="p1">Hi, <?php $rows = mysqli_fetch_assoc($connects);
		echo $rows['fname']; ?></p>
	</div>
  <div class="center">
    <div class="down"></div>
</div>
      
  <div class="inputBx">
	<a href="applied.php">	<input type="submit" value="Applied jobs" name="submit"> </a>
	</div>
      <br /><br />
      <br />
      <div class="inputBx">
       <a href="userhome2.php"><input type="submit" value="Apply job" name="Submit" /></a> 
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
    </form>
    </div> 
     
    </form>
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
    .b1 {
      float: right;
      background: none;
      border: none;
      font-size: 15px;
      color: white;
      padding-right: 20px;
    }
    .p1 {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
    .center{
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.down{
    position: relative;
    width: 20px;
    height: 33px;
    border-radius: 25px;
    background: transparent;
    border: 4px solid #545885;
    overflow: hidden;
}
.down:before{
    content: '';
    position: absolute;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #fff;
    left: 50%;
    top: 10px;
    transform: translate(-50%,0);
    animation: animate 1s linear infinite;
}
.down:after{
    content: '';
    position: absolute;
    width: 6px;
    height: 12px;
    border-radius: 50%;
    background: #545885;
    left: 50%;
    top: 5px;
    transform: translate(-50%,0);
    border-radius: 3px;
}
 @keyframes animate
{
    0%
    {
        transform: translate(-50%,20px);
        opacity: 0;
    }
    80%
    {
        transform: translate(-50%,60px);
        opacity: 0;
    }
    100%
    {
        transform: translate(-50%,100px);
        opacity: 0;
    }
} 
.p1{
  color: #545885;
 font-size: 35px;
  
}
.inputBx input[value="Applied jobs"] {
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
}
.inputBx input[value="Apply job"] {
  background: #545885;
  width: 370px;
  height: 44px;
  font-size: 25px;
  color: white;
  border-radius: 30px;
  margin-left: 500px;
  margin-top: 5px;
  margin-bottom: 10px;
  border: none;
  cursor: pointer;
}
.footer {
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: lightgray;
      color: white;
      text-align: center;
      padding-top: 5px;
    }
    .f4 {
      font-size: 30px;
      text-align: center;
      padding: 0;
      color: #545885;
      font: bold;
    }
    .f5 {
      font-size: 18px;
      text-align: center;
      color: #545885;
      font-weight: 300;
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
