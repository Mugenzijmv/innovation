        <div class="row">
            <div class="col d-flex justify-content-center py-5 ">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                      <a class="navbar-brand" href="dashboard"><i class="fa fa-home"></i> Home</a>
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="requests"> <i class="fa fa-user-plus"></i> Requests</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="server/phpControllers/logout.php?logout_id=<?php echo $row['unique_id']; ?>"> <i class="fa fa-key"></i> Logout</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
            </div>
        </div>