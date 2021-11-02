<?php include_once('server/phpControllers/session.php'); ?>
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
    <div class="container pb-5">
        <div class="row">
            <div class="col d-flex justify-content-center py-5 ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-primary">
                  <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                      <a class="navbar-brand" href="#">Home</a>
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Requests</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Members</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
            </div>
        </div>
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
                  <tr>
                    <th scope="row">1</th>
                    <td>Mugenzi</td>
                    <td>mdesign@gmail.com</td>
                    <td><button class="btn btn-warning btn-sm"> Edit</button> <button class="btn btn-danger btn-sm"> Delete</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="row">
            
                 <!-- 
                <div class="adminpopular-header-submenu">
                     <ul>
                         <li><a href="#"><?php //echo $row['email']; ?></a></li>
                         <li>
                             <a href="phpControllers/logout.php?logout_id=<?php //echo $row['unique_id']; ?>">Logout <i class="fa fa-sign-out"></i></a>
                         </li>
                     </ul>
                </div> -->
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col">
                <footer class="mt-auto">Powered ny mdesogn</footer>
            </div>
        </div>
    </div>
    <script src="server/jsControllers/login.js"></script>
</body>
</html>