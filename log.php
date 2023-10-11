<?php

// $username = $_POST ["username"];
// $password = $_POST ["password"];

// $credentials = array("sree:1234", "sree.eg:1234");

// foreach ($credentials as $credential){
//     $cred_user = explode(":", $credential)[0];
//     $cred_pass = explode(":", $credential)[1];

//     if ($username == $cred_user && $password == $cred_pass){
//         header('Location: ./home.php');
//         exit();
//     }
// }
// header('Location: log.php');
        // if (isset($_POST['submit']))
        //     { 
         $dbconn = mysqli_connect('localhost','root','','tweb');    
        //include("config.php");
        session_start();
        $username=$_POST['name'];
        $password = $_POST["password"];
        $_SESSION['name']=$username; 
        $query = mysqli_query( $dbconn, "SELECT * FROM users WHERE name='$username' and password='$password'");
         if (mysqli_num_rows($query) != 0)
        // {
        //  echo "location.href='./home.php' ";   
        //   }
        //   else
        //   {
        // echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
        // }
        {
            header('location:home.php');
          }
          else{
            header('location:login.html'); 
          }
        // }
?>
