<?php
$conn = mysqli_connect("localhost","root","","jobdb");

if($conn)
{
    echo "Connection Successfully";
}
else
{
    echo "Error";
}

$query = "SELECT `EmpID`, ` fname`, `gender`, `phone`, `email` FROM `employee`";
$connect = mysqli_query($conn, $query);
$num = mysqli_num_rows($connect);
?>








<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>User Vacancy</title>
    <link rel="stylesheet" type="text/css" href="jobresult2.css">
</head>
<body>
    <div class="registered_info">
        <table>
            <thead>
                <tr>
                    <th>USERID</th>
                    <th>FNAME</th>
                    <th>GENDER</th>
                    <th>PHONE</th>
                    <th>EMAIL</th>
                </tr>
            </thead>
            <?php
            if($num > 0)
            {
                while($data = mysqli_fetch_assoc($connect))
                {
                    echo "
                    <tr>
                    <td>".$data['EmpID']."</td>
                    <td>".$data['fname']."</td>
                    <td>".$data['gender']."</td>
                    <td>".$data['phone']."</td>
                    <td>".$data['email']."</td>
                    <td><p class='status'>APPLIED</p></td>
                    <td><p class='statue'>VIEW</p></td>
                    <td><p class='stat'>DELETE</p></td>
                    </tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>