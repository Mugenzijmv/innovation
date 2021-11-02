<?php
session_start();
if(!isset($_SESSION['unique_id'])){
    header('location: index.php');
}
    include_once('config.php');
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']} ");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $unique_id = $row['unique_id'];
    }
?>