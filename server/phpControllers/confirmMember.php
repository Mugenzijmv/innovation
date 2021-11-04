<?php
session_start();
include_once('config.php');
$unique_id = mysqli_real_escape_string($conn, $_GET['unique_id']);
$permission = "Confirmed";
$sql2 = mysqli_query($conn, "UPDATE users SET permission = '{$permission}' WHERE unique_id = '{$unique_id}' ");
if($sql2){
    header('location: ../../dashboard.php');
}else{
    echo "Something went wrong";
}
?>