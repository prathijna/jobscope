<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "jobdb";


$conn = mysqli_connect($servername,$username,$password,$database_name);
//now check the connection

if(!$conn)
{
	die("connection failed:" . mysqli_connect_error());
}
$sql = "SELECT * FROM `job`";
$result = $conn->query($sql);

if($result->num_rows >0)
{
	while ($row = $result->fetch_assoc())
	{
		echo "<tr><td>".$row["jobid"] . "</td><td>" . $row["Title"] . "</td><td>" . $row["Salary"] . "</td><td>". $row["Exprnce"]. "</td><td>" .$row["Eligibility"] . "</td></tr>";
	}
	echo "";
}
else
{
	echo "0 result";
}
$conn->close();

?>