<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Admin Login</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}" />
  <body>

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
          <!-- ========== form-elements-wrapper start ========== -->
          <div class="form-elements-wrapper mt-5">
            <div class="row d-flex justify-content-center align-items-center">
              <div class="col-lg-6">
                <!-- input style start -->
                <div class="card-style mb-30">
                  <form action="" method="post">
                    @csrf
                  <h6 class="mb-25">Admin Login</h6>
                  <!-- end input -->
                  <div class="input-style-2">
                    <input type="text" name="name" placeholder="Full Name" />
                    <span class="icon"> <i class="lni lni-user"></i> </span>
                  </div>
                  <!-- end input -->
                  <div class="input-style-2">
                    <input type="password" name="password" placeholder="Enter Password" />
                  </div>
                  <!-- end input -->
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="#" class="mx-4">Don't you have an acount?</a>
                </form>
                </div>
                <!-- end card -->
                <!-- ======= input style end ======= -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>  
    </main>
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
