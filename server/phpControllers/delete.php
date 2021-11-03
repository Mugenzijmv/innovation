<?php
    include_once "config.php";
    $memberId = mysqli_real_escape_string($conn, $_GET['memberId']);
    echo $unblockUser;
    $pernmision = "Blocked";
    $sql = mysqli_query($conn, "DELETE FROM users WHERE unique_id='{$memberId}'");
    if($sql){
        header("location: ../../dashboard.php");
    }
?>