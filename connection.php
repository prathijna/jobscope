<?php

	$conn = mysqli_connect("localhost","root","","jobdb");

	if(!$conn)
	{
		echo "Database connection failed....";
	}
?>