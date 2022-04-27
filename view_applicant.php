
<?php
  $conn = mysqli_connect("localhost","root","","jobdb");

  if($conn)
  {
    echo "Connection Successfully";
  }
  else{
    echo "Error";
  }
  $EmpID=$_GET['EmpID'];

  $query = "SELECT * FROM `employee` WHERE EmpID='$EmpID' ";

  $connect = mysqli_query($conn,$query);
  $num = mysqli_num_rows($connect);
  $_SESSION['EmpID'] = $EmpID;
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View applicantPage</title>
    <link rel="stylesheet" type="text/css" href="view_applicant.css">
</head>
<body>
   
    <div class="topnav">
        <h1>JOBSCOPE</h1>
    </div>

    <div >
    <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Phone no </th>
                    <th> Email  Address</th>
                    <th> 10th  Marks </th>
                    <th> 12th Marks </th>
                    <th>Highest Qualification</th>
                    <th>Highest  Qualification Marks</th>
                    <th></th>
                </tr>
            </thead>
             <?php
                  if($num > 0)
                  {
                    while(  $data = mysqli_fetch_assoc($connect))
                    {
                        echo "
                            <tr>
                            <td>".$data['fname']."</td>
                            <td>".$data['lname']."</td>   
                            <td>".$data['dob']."</td>
                            <td>".$data['age']."</td>
                            <td>".$data['address']."</td>
                            <td>".$data['phone']."</td>
                            <td>".$data['email']."</td>
                            <td>".$data['TenthMarks']."</td>
                            <td>".$data['TwelthhMarks']."</td>
                            <td>".$data['Highest_qualification']."</td>
                            <td>".$data['Marks']."</td>
                            <td><a href='write_message.php'class='stat'>Write a message</a></td>    
                            </tr>";

                    }
                  }
                ?>
            
        </table>
       
              
    </div>
</body>
</html>
                    