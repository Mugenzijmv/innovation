<?php include 'server/phpControllers/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Document</title>
</head>
<body> 
    <div class="container pb-5">
        <?php include_once('inc/header.php'); ?>
        <div class="row">
          <?php
          $permission = "Confirmed";
          $sqlUsers = mysqli_query($conn, "SELECT * FROM users WHERE unique_id != {$_SESSION['unique_id']} AND permission = '{$permission}' ");
          if(mysqli_num_rows($sqlUsers) > 0){
              while ($rowUsers = mysqli_fetch_assoc($sqlUsers)) { ?>
          <div class="col-md-3 my-1">
            <div class="card pt-3" style="width: 15rem;">
              <div class="row">
                <div class="col-md-12 d-flex justify-content-center mb-4">
                  <img  class="profile-image rounded-circle" src="assets/images/<?php echo $rowUsers['img']; ?>" class="card-img-top" alt="...">
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                  <h5 class="card-title"><?php echo $rowUsers['fname']; ?> <?php echo $rowUsers['lname']; ?></h5><br>
                </div>
                <div class="col-md-12 d-flex justify-content-center mb-5">
                  <a href="editMember.php?memberId=<?php echo $rowUsers['unique_id']; ?>" class="btn btn-outline-warning btn-sm mx-1"><i class="fa fa-edit"></i></a>
                  <a href="server/phpControllers/delete.php?memberId=<?php echo $rowUsers['unique_id']; ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php
              }
            }
          ?>
        </div>
        <?php include_once('inc/footer.php'); ?>
    </div>
    <!-- <script src="server/jsControllers/login.js"></script> -->
</body>
</html>