<?php
session_start();
include_once('config.php');
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}' ");
        if(mysqli_num_rows($sql) > 0){
            echo "$email - This email alredy exist!";
        }else{
            if(isset($_FILES['image'])){
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type']; 
                $tmp_name = $_FILES['image']['tmp_name'];
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);
                $extensions = ["jpeg", "png", "jpg"];
                if(in_array($img_ext, $extensions) === true){
                    $types = ["image/jpeg", "image/jpg", "image/png"];
                    if(in_array($img_type, $types) === true){
                        $time = time(); 
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name,"../../assets/images/".$new_img_name)){ 
                            $status = "Active now";
                            $role = "Admin";
                            $random_id = rand(time(), 100000000);
                            $encrypt_pass = md5($password);
                            $sql2 = mysqli_query($conn, "INSERT INTO users(unique_id, fname, lname, email, password, img, role, status)
                                                VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$role}', '{$status}' ) ");
                            if($sql2){
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' ");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row55 = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row55['unique_id'];
                                    //echo $row55['unique_id'];
                                    echo "success";
                                }else{
                                    echo "$email - This email address not Exist!";
                                }
                            }else{
                                echo "Something went wrong";
                            }
                        }else {
                            echo "Uploading image in directory error!";
                        }
                    }else{
                        echo "Please select an image file - jpeg, jpg, png!";
                    }
                }else{
                    echo "Please select an image file";
                }
            }           
        }
    }else{
        echo "$email - This is not a valid email";
    }
}else{
    echo "All input field are required";
}

?>