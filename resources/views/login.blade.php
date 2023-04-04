
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>K-Tran | Music</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css" type="text/css">
    <link rel="stylesheet" href="css/vendor.bundle.base.css" type="text/css">
    <link rel="stylesheet" href="css/stylelogin.css"type="text/css">
    <!-- End layout styles -->
  </head>
  <body>
    @if(session('message'))
    <spand class ="aler alert-danger">
      <strong>{{ session('message')}}</strong>
    </spand>
    @endif
    <div id="login">
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="text-center text-info">Login</h3>
                 <form id="login-form" class="form" action="{{route('auth.login')}}" method="post"  enctype="multipart/form-data">
                   @csrf
                  <div class="form-group">
                    <label>Your Email *</label>
                    <input type="text" name="email" id="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" name="password" id="password" class="form-control">
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
                    <button class="btn btn-facebook mr-2 col">
                      <i class="fa fa-facebook" ></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="fa fa-google"></i> Google plus </button>
                  </div>
                  <div id="register-link" class="text-right">
                                <a href="{{route('showregister')}}" class="text-info">Register here</a>
                            </div>
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
    <script src="{{asset('/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('/js/off-canvas.js')}}"></script>
    <script src="{{asset('/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('/js/misc.js')}}"></script>
    <script src="{{asset('/js/settings.js')}}"></script>
    <script src="{{asset('/js/todolist.js')}}"></script>
    <!-- endinject -->
  </body>

</html>
