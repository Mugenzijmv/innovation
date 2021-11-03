<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body> 

<?php
    include_once "server/phpControllers/config.php";
    $memberId = mysqli_real_escape_string($conn, $_GET['memberId']);
    $sqlEditMember = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$memberId}'");
    if(mysqli_num_rows($sqlEditMember) > 0){
        $row_sqlEditMember = mysqli_fetch_assoc($sqlEditMember);
    }
    ?>
    <div class="container bg-light">
        <div class="row ">
            <div class="col-md-12 my-5 d-flex justify-content-center mb-4">
              <img style="width : 100px"  class="profile-image rounded-circle" src="assets/images/<?php echo $row_sqlEditMember['img']; ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-md-12 d-flex justify-content-center">
              <h5 class="card-title"><?php echo $row_sqlEditMember['fname']; ?> <?php echo $row_sqlEditMember['lname']; ?></h5><br>
            </div>
            <div class="col-md-12 d-flex justify-content-center mb-5">
              <p class="card-text">Member</p>              
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card ">
                    <div class="card-body  p-3 register">
                      <form>
                        <div class="error-text alert alert-danger  align-items-center " role="alert">
                          <div class="">Error!</div>
                        </div>
                        <div class="success-text alert alert-success  align-items-center " role="alert">
                          <div class="">Success!</div>
                        </div>
                        <input type="hidden" name="unique_id"  value="<?php echo $row_sqlEditMember['unique_id'] ?>">
                        <div class="row g-2">
                          <div class="col-md-6">
                            <div class="form-floating">
                            
                              <input type="text" name="fname" class="form-control" id="floatingInputGrid" value="<?php echo $row_sqlEditMember['fname'] ?>">
                              <label for="floatingInputGrid">First name</label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-floating">
                              <input type="text" name="lname" class="form-control" id="floatingInputGrid" value="<?php echo $row_sqlEditMember['lname'] ?>"> 
                              <label for="floatingSelectGrid">Last name</label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="text" name="email" disabled class="form-control" id="floatingInputGrid" value="<?php echo $row_sqlEditMember['email'] ?>">
                              <label for="floatingInputGrid">Email</label>
                            </div>
                          </div>
                          
                          <div class="d-grid gap-2 col-6 mx-auto button">
                            <input type="submit" class="btn btn-primary" value="Save change">
                          </div>
                          <div class="d-grid gap-2 col-6 mx-auto button">
                              <a href="dashboard" class="btn btn-outline-primary" >Back to home</a>
                          </div>
                        </div>
                      </form>
                  </div>
                </div>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col">
                <footer class="mt-auto">Powered ny mdesogn</footer>
            </div>
        </div>
    </div>
    <script src="server/jsControllers/editMember.js"></script>
    <?php //include_once('generalLinks/js.php'); ?>
</body>
</html>