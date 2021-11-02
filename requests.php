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
            <div class="col-9 d-flex">
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
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id != {$_SESSION['unique_id']} ");
                if(mysqli_num_rows($sql) > 0){
                    while ($row = mysqli_fetch_assoc($sql)) { ?>
                  <tr>
                    <th scope="row"><?php echo $i++ ?></th>
                    <td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                      <a href="editWorker.php?editWorker=<?php echo $row['unique_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                      <a href="server/phpControllers/delete.php?deletekUser=<?php echo $row['unique_id']; ?>" class="btn btn-outline-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                  <?php
                    }
                }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <?php include_once('inc/footer.php'); ?>
    </div>
    <script src="server/jsControllers/login.js"></script>
</body>
</html>