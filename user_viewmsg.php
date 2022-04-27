<?php
session_start();

  $conn = mysqli_connect("localhost","root","","jobdb");
  $EmpID=$_SESSION['EmpID'];

  if($conn)
  {
    $query = "SELECT `name`,`status`,`message` FROM `message` WHERE EmpID='$EmpID'";
    $connect = mysqli_query($conn,$query);
    $num = mysqli_num_rows($connect);
  
  }
  else{
    echo "Error";
  }
  

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JOB Result Page</title>
    <link rel="stylesheet" type="text/css" href="jobresult1.css">
</head>
<body>
   
    <div class="topnav">
        <h1>JOBSCOPE</h1>
    </div>

     <div > 
        <table  style="margin-right: auto;margin-left:auto">
            <thead>
                <tr>
                   
                    <th>Company Name</th>
                    <th>Status </th>
                    <th>Message</th>

                </tr>
               
            </thead>
             <?php
                  if($num > 0)
                  {
                    while(  $data = mysqli_fetch_assoc($connect))
                    {
                        echo "
                            <tr>
                            <td>".$data['name']."</td>
                            <td>".$data['status']."</td>
                            <td>".$data['message']."</td>
                            </tr>";

                    }
                  }
                ?>
          
        </table>
       
    </div>


</body>
</html>