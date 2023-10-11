<?php
session_start();
$con = mysqli_connect('localhost','root','','tweb');

if(isset($_POST['registration']))
{
    $name = mysqli_real_escape_string($con, $_POST['Username']);
    $userid = mysqli_real_escape_string($con, $_POST['Userid']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $mailid = mysqli_real_escape_string($con, $_POST['mailid']);
    $C_password = mysqli_real_escape_string($con, $_POST['c_password']);

    $query = "INSERT INTO users (user_id,name,password,mailid,c_password) VALUES ('$userid','$name','$password','$mailid','$C_password')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header('Location: login.html');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: registration.html');
        exit(0);
    }
}
?>