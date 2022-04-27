<?php
session_start();

$name=$_SESSION['name'];
$EmpID=$_SESSION['EmpID'];

$conn = mysqli_connect("localhost","root","","jobdb");

if($conn)
{
  echo "Connection Successfully";
}
else{
  echo "Error";
}

if(isset( $_POST['save']))
{
$status=$_POST['status'];
$message=$_POST['message'];

$query=mysqli_query($conn,"INSERT INTO `message`(`EmpID`, `name`, `status`, `message`) VALUES ('$EmpID','$name','$status','$message') ");
  

$connect = mysqli_query($conn,$query);

}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>message</title>
    <link rel="stylesheet" type="text/css" href="msg.css"/>
    
  </head>
  <body>
    <section>
      <div class="contentbx">
        <div class="formbx">
          <form action="write_message.php" method="post">
            <h1>JOBSCOPE</h1>
            <h2>Write a Message</h2>
            <div class="inputbx">
              <p>Status</p>
              <span style="color: #545885">Accepted</span>
              <input type="radio" name="status" value="Accepted">
              <span style="color: #545885">Rejected</span>
              <input type="radio" name="status" value="Rejected" >
            </div>
            <div class="inputbx">
              <p>Message</p>
              <textarea rows="10" cols="90" class="textarea" name="message"></textarea>
            </div>
            <div class="inputbx">
              <div id="logx">
                <input type="submit" value="Send" name="save" />
              </div>
            </div>
            <div class="text">
              <h4>BACK</h4>
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>