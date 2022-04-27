
<?php
session_start();

  $conn = mysqli_connect("localhost","root","","jobdb");
  $cid=$_SESSION['cid'];

  if($conn)
  {
    echo "";
  }
  else{
    echo "Error";
  }
  if(isset($_GET['jobid'])){
    $jobid=$_GET['jobid'];
    $delete=mysqli_query($conn,"DELETE FROM `job` WHERE jobid='$jobid'");
  }

  $query = "SELECT * FROM `job` WHERE cid='$cid'";
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
        <table>
            <thead>
                <tr>
                    <th>JOB ID</th>
                    <th>JOB TITLE</th>
                    <th>EXPERIENCE</th>
                    <th>ELIGIBILITY</th>
                    <th>SALARY</th>
                    <th>City</th>
                    <th>Description</th>
                    <th>Hour</th>
                    <th> </th>
                    <th> </th>
                    <th> </th>

                </tr>
               
            </thead>
             <?php
                  if($num > 0)
                  {
                    while(  $data = mysqli_fetch_assoc($connect))
                    {
                        echo "
                            <tr>
                            <td>".$data['jobid']."</td>
                            <td>".$data['Title']."</td>
                            <td>".$data['Exprnce']."</td>
                            <td>".$data['Eligibility']."</td>
                            <td>".$data['Salary']."</td>
                            <td>".$data['City']."</td>
                            <td>".$data['Description']."</td>
                            <td>".$data['Hour']."</td>
                            <td><a href='view_applied.php?jobid=$data[jobid]' class='statue'>VIEW APPPLIED</a></td>
                            <td><a href='update.php?jobid=$data[jobid] & Title=$data[Title] & Exprnce=$data[Exprnce] & Eligibility=$data[Eligibility] & Salary=$data[Salary] & City=$data[City] & Description=$data[Description] & Hour=$data[Hour]' class='statue'>UPDATE</a></td>
                            <td><a href='jobresult1.php?jobid=".$data['jobid']."'class='stat'>Delete</a></td>
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