<?php
// session_start();
include_once('config.php');
$unique_id = mysqli_real_escape_string($conn, $_GET['unique_id']);
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}' ");
if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
    $doc = $row['doc'];
    $file = "../../assets/images/$doc";
    $filename = "$doc";
    header('Content-type: application/pdf');
    header('Content-Dispositipon: inline; filename=" ' . $filename . ' " ');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Rangers: bytes');
    @readfile($file);
}
?>