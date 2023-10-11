<?php
session_start();
$con = mysqli_connect('localhost','root','','tweb');

if(isset($_POST['upload_save_btn']))
{
    $place_id = mysqli_real_escape_string($con, $_POST['place_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    //$image = $_FILES['image_profile']['name'];
    $detail = mysqli_real_escape_string($con, $_POST['place_detail']);
    $longitude = mysqli_real_escape_string($con, $_POST['place_longitude']);
    $latitude = mysqli_real_escape_string($con, $_POST['place_latitude']);
    $reference = mysqli_real_escape_string($con, $_POST['ref_id']);
    $map = mysqli_real_escape_string($con, $_POST['g_map']);
    $Cname = mysqli_real_escape_string($con, $_POST['cust_name']);
    $Creview = mysqli_real_escape_string($con, $_POST['cust_reviews']);

    //$path = "uploads/"; /** Path for Uploading your Image **/
        
    //$image_extension = pathinfo($image, PATHINFO_EXTENSION); /** Image Extension **/
    //$filename = time().'.'.$image_extension; /** Renaming the Image **/

    $query = "INSERT INTO places (id,name,longitude,reviews,latitude,photo_id,Google_Map,cust_reviews,cust_name) VALUES ('$place_id','$name','$longitude','$detail','$latitude','$reference','$map','$Creview','$Cname')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        // Upload Image to uploads folder
        //move_uploaded_file($_FILES['image_profile']['tmp_name'], $path."/".$filename);

        //$_SESSION['message'] = "Place Uploaded Successfully";
        header('Location: /IMP_PROJ_OFF/home.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: place_det.php');
        exit(0);
    }
}
?>