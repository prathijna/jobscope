
  <?php
    session_start();

    $conn = mysqli_connect("localhost","root","","jobdb");
    $jobid=$_GET['jobid'];
   
    if(isset($_GET['applied_id'])){
        $applied_id=$_GET['applied_id'];
        $delete=mysqli_query($conn,"DELETE FROM `applied` WHERE applied_id='$applied_id'");
      }
    

   $query = "SELECT * FROM `applied` WHERE jobid='$jobid'";
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
                    <th>Candidate ID</th>
                    <th>Job ID</th>
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Candidate Phone </th>
                    <th> Candidate Email </th>
                    <th> gender </th>
                    <th> Date Of Birth </th>
                    <th></th>
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
                            <td>".$data['EmpID']."</td>
                            <td>".$data['jobid']."</td>   
                            <td>".$data['Title']."</td>
                            <td>".$data['fname']."</td>
                            <td>".$data['lname']."</td>
                            <td>".$data['phone']."</td>
                            <td>".$data['email']."</td>
                            <td>".$data['gender']."</td>
                            <td><a href='view_applicant.php?EmpID=$data[EmpID]  'class='stat'>VIEW</a></td>
                            <td><a href='view_applied.php?jobid=$data[jobid] & applied_id=$data[applied_id] 'class='stat'>REJECT</a></td>

                            
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