<?php
foreach ($_FILES["uploaded_file"]["error"] as $key => $error) {
   
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["uploaded_file"]["tmp_name"][$key];
        $name = $_FILES["uploaded_file"]["name"][$key];
        $file_path = "your path";
        $file_path = $file_path . $name;

        if (@move_uploaded_file($tmp_name, $file_path)) {
           echo "success";
                
        } else {

            echo "fail";
        }
    }
}
?>