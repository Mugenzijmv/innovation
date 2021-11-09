<?php
session_start();
include_once('config.php');
$unique_id = mysqli_real_escape_string($conn, $_POST['unique_id']); 
if(isset($_FILES['image'])){
    $img_name = $_FILES['image']['name'];
    $img_type = $_FILES['image']['type']; 
    $tmp_name = $_FILES['image']['tmp_name'];
    $img_explode = explode('.', $img_name);
    $img_ext = end($img_explode);
    $extensions = ['zip', 'pdf', 'docx'];
    if(in_array($img_ext, $extensions) === true){
        // $types = ["image/zip", "image/pdf", "image/docx"];
        // if(in_array($img_type, $types) === true){
            $time = time(); 
            $new_img_name = $time.$img_name;
            if(move_uploaded_file($tmp_name,"../../assets/images/".$new_img_name)){ 
                // $permission = "Waiting";
                // $sql2 = mysqli_query($conn, "UPDATE users SET doc = '{$new_img_name}', permission = '{$permission}' WHERE unique_id = '{$unique_id}' ");
                $sql2 = mysqli_query($conn, "UPDATE users SET doc = '{$new_img_name}' WHERE unique_id = '{$unique_id}' ");
                if($sql2){
                    echo "success";
                }else{
                    echo "Something went wrong";
                }
            }else {
                echo "Uploading image in directory error!";
            }
       /*  }else{
            echo "Please select an image file - jpeg, jpg, pdf!";
        } */
    }else{
        echo "Please select an image file";
    }
}
?>