
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>>K-Tran | Music</title>
  <link rel="stylesheet" href="css/materialdesignicons.min.css" type="text/css">
    <link rel="stylesheet" href="css/vendor.bundle.base.css" type="text/css">
    <link rel="stylesheet" href="css/stylelogin.css"type="text/css">
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                 <h3 class="text-center text-info">Register</h3>
                <div class="main-login main-center">
					<form class="form-horizontal" method="post" action="{{route('auth.register')}}" enctype="multipart/form-data">
						@csrf
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                  </div>
			
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook col mr-2">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up text-center">Already have an Account?<a href="{{route('login')}}"> Sign Up</a></p>
                  
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/misc.js"></script>
    <script src="/js/settings.js"></script>
    <script src="/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>