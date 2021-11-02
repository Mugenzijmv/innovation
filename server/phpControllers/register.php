<?php
//session_start();
include_once('config.php');
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
    //let' s check user email is valid or not
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //if email is valid
        //let' s check that email alredy  exist in the database or not
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}' ");
        if(mysqli_num_rows($sql) > 0){
            echo "$email - This email alredy exist!";
        }else{
            //let' s check user  upload file or not
            if(isset($_FILES['image'])){ //if file is uploaded
                $img_name = $_FILES['image']['name']; // getting user upload img name
                $img_type = $_FILES['image']['type']; // getting user upload img type
                $tmp_name = $_FILES['image']['tmp_name']; // this temporary name is used to save/move file in our folder

                //let' s explode image and get the last extenstion like jpg  png
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode); //here we get the extension of an user uploaded img file

                //$extensions = ['png', 'jpeg', 'jpg'];
                $extensions = ["jpeg", "png", "jpg"];
                if(in_array($img_ext, $extensions) === true){ //if user upload img ext is matched with any array extensions
                    $types = ["image/jpeg", "image/jpg", "image/png"];
                    if(in_array($img_type, $types) === true){
                        $time = time(); // this will return us current time
                                         // we need this time because when you uploading user img to in our folder we rename user file with current time
                                         // so all the img file will have a unique name
                        // let' s move the user upload img to our particular folder
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name,"../../assets/images/".$new_img_name)){ // if user upload image move to our folder successfully
                            $status = "Active now"; // once user signed up then his status will be active now
                            $random_id = rand(time(), 100000000); //creating a random id for user
                            $encrypt_pass = md5($password); //password encription
                            //let' s insert all data inside the table

                            //$sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                             //   VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')");

                            $sql2 = mysqli_query($conn, "INSERT INTO users(unique_id, fname, lname, email, password, img, status)
                                                VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}' ) ");
                            if($sql2){ //if these data inserted
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' ");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    //$_SESSION['unique_id'] = $row['unique_id']; //using this session we used user unique id in other php file
                                    echo "success";
                                    //header('location: ./workers.php');
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