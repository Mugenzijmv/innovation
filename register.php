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
    <div class="container bg-light">
        <div class="row text-center py-5">
            <div class="col">
                <h1>Signup</h1>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card ">
                    <div class="card-body  p-3 register">
                      <form>
                        <div class="error-text alert alert-danger  align-items-center " role="alert">
                          <div class="">Error!</div>
                        </div>
                        <div class="row g-2">
                          <div class="col-md">
                            <div class="form-floating">
                              <input type="text" name="fname" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                              <label for="floatingInputGrid">First name</label>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-floating">
                              <input type="text" name="lname" class="form-control" id="floatingInputGrid" placeholder="name@example.com"> 
                              <label for="floatingSelectGrid">Last name</label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-floating">
                              <input type="text" name="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                              <label for="floatingInputGrid">Email</label>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-floating">
                              <input type="password" name="password" class="form-control" id="floatingInputGrid" placeholder="name@example.com"> 
                              <label for="floatingSelectGrid">Password</label>
                            </div>
                          </div>
                          <div class="col-md my-2">
                            <input type="file" name="image" class="form-control" id="floatingInputGrid" placeholder="name@example.com"> 
                          </div>
                          <div class="d-grid gap-2 col-12 mx-auto button">
                            <input type="submit" class="btn btn-primary" value="Register">
                          </div>
                          <div class="d-grid gap-2 col-12 mx-auto button py-3">
                            <p>Have an account? <a href="index">Login here</a></p>
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
    <script src="server/jsControllers/register.js"></script>
    <?php //include_once('generalLinks/js.php'); ?>
</body>
</html>