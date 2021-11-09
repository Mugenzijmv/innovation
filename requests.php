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
    <div class="container pb-5 bg-light">
        <?php include_once('inc/header.php'); ?>
        <div class="row d-flex justify-content-center">
            <div class="col-9">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Names</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                $permission = "Confirmed";
                $sqlMember = mysqli_query($conn, "SELECT * FROM users WHERE unique_id != {$_SESSION['unique_id']} AND permission != '{$permission}' ");
                if(mysqli_num_rows($sqlMember) > 0){
                    while ($rowMember = mysqli_fetch_assoc($sqlMember)) { ?>
                  <tr>
                    <th scope="row"><?php echo $i++ ?></th>
                    <td><?php echo $rowMember['fname']; ?> <?php echo $rowMember['lname']; ?></td>
                    <td><?php echo $rowMember['email']; ?></td>
                    <td>
                      <a href="server/phpControllers/confirmMember.php?unique_id=<?php echo $rowMember['unique_id']; ?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-check"></i></a>
                      <a href="server/phpControllers/denyMember.php?deletekUser=<?php echo $rowMember['unique_id']; ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-times"></i></a>
                      <!-- <a class="btn btn-outline-primary btn-sm rounde-circle" href="requests"> <i class="fa fa-chevron-right"></i></a> -->
                    </td>
                  </tr>
                  <?php
                    }
                } else { ?>
                <tr>
                    <th colspan="4" scope="row"><h1>No one here!</h1></th>
                </tr>


                <?php
                }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <?php include_once('inc/footer.php'); ?>
    </div>
    <!-- <script src="server/jsControllers/login.js"></script> -->
</body>
</html>




