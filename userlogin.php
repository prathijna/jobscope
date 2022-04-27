<?php
   
    		
require_once('connection.php');

$email = $passwd = '';
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$sql = "SELECT * FROM `employee` WHERE email = '$email' AND passwd = '$passwd'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $EmpID = $row['EmpID'];
        $email = $row['email'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $gender = $row['gender'];
        $dob = $row['dob'];
        $phone = $row['phone'];
        session_start();
        $_SESSION['EmpID'] = $EmpID;
        $_SESSION['email'] = $email;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['gender'] = $gender;
        $_SESSION['dob'] = $dob;
        $_SESSION['phone'] = $phone;
    }
    header("Location: userhomepage.php");

}

else
{
    echo "Invalid email or password";
}
if(isset($_POST['save']))
{
    header("Location: user_registration.html");
}


/*if(isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $passwd = mysqli_real_escape_string($conn,$_POST['passwd']);

    if(empty($email))
    {
        array_push($errors, "emailID is required");
    }
    if (empty($passwd)) 
    {
        array_push($errors,"password is required");
    }
    if(count($errors) == 0)
    {
        $passwd = $passwd;
        $query = "SELECT * FROM `company` WHERE email = '$email' AND passwd = '$passwd'";
        $results = mysqli_query($conn,$query);

        if(mysqli_num_results($results))
        {
            $_SESSION['email'] = $email;
            $_SESSION['passwd'] = $passwd;
        }
    }
}*/

if(empty($_POST['email']))
{
    $email_error = "please enter the emailId";
}
if(empty($_POST['passwd']))
{
    $passwd_error = "please enter the password";
}
?>