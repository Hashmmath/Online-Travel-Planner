<?php
session_start();
$con = mysqli_connect('localhost','root','','test_db');

if(isset($_POST['upload_save_btn']))
{
    $fullname = mysqli_real_escape_string($con, $_POST['fullname']);
    $place_id = mysqli_real_escape_string($con, $_POST['place_id']);
    $image = $_FILES['image_profile']['name'];

    $path = "uploads/"; /** Path for Uploading your Image **/
        
    $image_extension = pathinfo($image, PATHINFO_EXTENSION); /** Image Extension **/
    $filename = time().'.'.$image_extension; /** Renaming the Image **/

    $query = "INSERT INTO images (id,place_name,image_url) VALUES ('$place_id','$fullname','$filename')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        // Upload Image to uploads folder
        move_uploaded_file($_FILES['image_profile']['tmp_name'], $path."/".$filename);

        $_SESSION['message'] = "Place Uploaded Successfully";
        header('Location: /IMP_PROJ_OFF/place_details.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: up.php');
        exit(0);
    }
}
?>