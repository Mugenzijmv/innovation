<?php include_once('server/phpControllers/session.php'); ?>
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
        <div class="row d-flex justify-content-center">
          <div class="card pt-3 " style="width: 30rem;">
            <img  class="profile-image rounded-circle" src="assets/images/<?php echo $row['img']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h5>
              <p class="card-text"><?php echo $row['email']; ?></p>
            </div>
          </div>
        </div>
        <?php include_once('inc/footer.php'); ?>
    </div>
    <script src="server/jsControllers/login.js"></script>
</body>
</html>