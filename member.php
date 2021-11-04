
        <?php include_once('inc/headerMember.php'); ?>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <div class="row d-flex justify-content-center">
          <div class="card pt-3 " style="width: 30rem;">
            <div class="row">

                <div class="col-md-12 d-flex justify-content-center mb-4">
                  <img  class="profile-image rounded-circle" src="assets/images/<?php echo $row['img']; ?>" class="card-img-top" alt="...">

                </div>
                <div class="col-md-12 d-flex justify-content-center">
                  <h5 class="card-title"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?> (<?php echo $row['email']; ?>)</h5><br>
                </div>
                <div class="col-md-12 d-flex justify-content-center mb-5">
                  <p class="card-text">Member</p>              
                </div>
                <div class="card-body  p-3">
                    <div class="row g-2">
                      <div class="col-md">
                        <div class="form-floating">
                          <input type="text" class="form-control alert-warning" id="floatingInputGrid" value="<?php echo $row['fname']; ?>" disabled>
                          <label for="floatingInputGrid">First name</label>
                        </div>
                      </div>
                      <div class="col-md">
                        <div class="form-floating">
                          <input type="text" class="form-control" id="floatingInputGrid" value="<?php echo $row['lname']; ?>" disabled> 
                          <label for="floatingSelectGrid">Last name</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-floating">
                          <input type="text" class="form-control" id="floatingInputGrid" value="<?php echo $row['email']; ?>" disabled>
                          <label for="floatingInputGrid">Email</label>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card-body  p-3 docUpload">
                    <form method="post" enctype="multipart/form-data">
                        <div class="error-text alert alert-danger  align-items-center " role="alert">
                          <div class="">Error!</div>
                        </div>
                        <div class="success-text alert alert-success  align-items-center " role="alert">
                          <div class="">Success!</div>
                        </div>
                        <input type="hidden" name="unique_id" class="form-control alert-warning" value="<?php echo $row['unique_id']; ?>">
                        <div class="row g-2">
                          <div class="col-md-12">
                            <div class="form-floating">
                              <h3>Upload your document</h3>
                            </div>
                          </div>
                          <div class="col-md my-2">
                            <input type="file" name="image" class="form-control"> 
                          </div>
                          <div class="d-grid gap-2 col-12 mx-auto button">
                            <input type="submit" class="btn btn-primary" value="Login">
                          </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
        <?php include_once('inc/footer.php'); ?>
    </div>
    <script src="server/jsControllers/docUpload.js"></script>
</body>
</html>