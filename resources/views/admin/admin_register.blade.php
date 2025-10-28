<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Admin Register</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}" />
  <body>

    <!-- ======== main-wrapper start =========== -->
          <!-- ========== form-elements-wrapper start ========== -->
          <div class="form-elements-wrapper mt-5">
            <div class="row d-flex justify-content-center align-items-center">
              <div class="col-lg-4">
                <!-- input style start -->
                <div class="card-style mb-30">
                  <form action="{{ route('admin.register.store') }}" method="post">
                    @csrf
                  <h6 class="mb-25">Admin Register</h6>
                  <!-- end input -->
                  <div class="input-style-2">
                    <input type="text" name="name" placeholder="Enter Name" />
                    <span class="icon"> <i class="lni lni-user"></i> </span>
                    @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  
                  <div class="input-style-2">
                    <input type="email" name="email" placeholder="Enter Email" />
                    <span class="icon"> <i class="lni lni-user"></i> </span>
                    @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <!-- end input -->
                  <div class="input-style-2">
                    <input type="password" name="password" placeholder="Enter Password" />
                  </div>
                  @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="input-style-2">
                    <input type="password" name="confirm_password" placeholder="Re_type Password" />
                    @error('confirm_password')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <!-- end input -->
                    <button type="submit" class="btn btn-primary">Register</button>
                    <a href="{{ route('admin.login.form') }}" class="mx-4">Already have an acount?</a>
                </form>
                </div>
                <!-- end card -->
                <!-- ======= input style end ======= -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>  
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dynamic-pie-chart.js') }}"></script>
    <script src="{{ asset('backend/assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/fullcalendar.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jvectormap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/world-merc.js') }}"></script>
    <script src="{{ asset('backend/assets/js/polyfill.js') }}"></script>
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
  </body>
</html>
