<?php
    include_once "config.php";
    $deletekUser = mysqli_real_escape_string($conn, $_GET['deletekUser']);
    echo $unblockUser;
    $pernmision = "Blocked";
    $sql = mysqli_query($conn, "DELETE FROM users WHERE unique_id='{$deletekUser}'");
    if($sql){
        header("location: ../../requests.php");
    }
?>