<?php
session_start();
include_once('config.php');
$unique_id = mysqli_real_escape_string($conn, $_POST['unique_id']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
if(!empty($fname) && !empty($lname)){
    $sql2 = mysqli_query($conn, "UPDATE users SET fname = '{$fname}', lname = '{$lname}' WHERE unique_id = '{$unique_id}' ");
    if($sql2){
        echo "Updated successfuly!";
    }else{
        echo "Something went wrong";
    }
}else{
    echo "All input field are required";
}
?>