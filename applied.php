
<?php
session_start();

  $conn = mysqli_connect("localhost","root","","jobdb");
  $EmpID=$_SESSION['EmpID'];

  if($conn)
  {
    echo "";
  }
  else{
    echo "Error";
  }
  if(isset($_GET['applied_id'])){
    $applied_id=$_GET['applied_id'];
    $delete=mysqli_query($conn,"DELETE FROM `applied` WHERE applied_id='$applied_id'");
  }

  $query = "SELECT * FROM `applied` WHERE EmpID='$EmpID' ";
  $connect = mysqli_query($conn,$query);
  $num = mysqli_num_rows($connect);


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
        <table style="margin-right: auto;margin-left:auto">
            <thead>
                <tr>
                    <th>JOB TITLE</th>
                    <th>SALARY</th>
                    <th>EXPERIENCE</th>
                    <th>ELIGIBILITY</th>
                    
                    <th>City</th>
                    <th>Description</th>
                    <th>Company Name</th>
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
                           
                            <td>".$data['Title']."</td>
                            <td>".$data['Salary']."</td>
                            <td>".$data['Exprnce']."</td>
                            <td>".$data['Eligibility']."</td>
                            <td>".$data['City']."</td>
                            <td>".$data['Description']."</td>
                            <td>".$data['cname']."</td>
                            <td><a href='applied.php?applied_id=".$data['applied_id']."'class='stat'>Delete</a></td>

                            </tr>";

                    }
                  }
                ?>
            <!-- <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><p class='status'>VIEW</p></td>
                    <td><p class='statue'>UPDATE</p></td>
                    <td><p class='stat'>DELETE</p></td>
                </tr>

                               
            </tbody> -->
        </table>
       
    </div>


</body>
</html>