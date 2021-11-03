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
        <div class="row">
            <div class="col d-flex justify-content-center py-5 ">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                      <a class="navbar-brand" href="#"><i class="fa fa-home"></i> Home</a>
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="server/phpControllers/logout.php?logout_id=<?php echo $row['unique_id']; ?>"> <i class="fa fa-key"></i> Logout</a>
                        </li>
                        <?php
                        $sqlPermit  = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']} ");
                        
                        if(mysqli_num_rows($sqlPermit) > 0){
                            $rowPermit = mysqli_fetch_assoc($sqlPermit); 
                            $permission = $rowPermit['permission'];
                            $permissionWait = "Waiting";
                            $permission = "Aproved";
                            if ($permission == $permissionWait) { ?>
                                <li class="nav-item">
                                  <a class="nav-link active  aria-current="page" href="#"> <i class="fa fa-exclamation"></i> Waiting...</a>
                                </li>
                            <?php
                            } elseif ($permission == $permission) { ?>
                                <li class="nav-item">
                                    <a class="nav-link text-success" aria-current="page" href="#"> <i class="fa fa-check"></i></a>
                                </li>
                            <?php
                            }
                             else { ?>
                                <li class="nav-item">
                                    <a class="nav-link active text-danger" aria-current="page" href="#"> <i class="fa fa-close"></i></a>
                                </li>
                            <?php
                            }
                            ?>
                        <?php
                        }
                        ?>
                       
                      </ul>
                    </div>
                  </div>
                </nav>
            </div>
        </div>