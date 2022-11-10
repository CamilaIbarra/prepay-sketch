<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/7de6ab665e.js"
      crossorigin="anonymous"
    ></script>
    <!-- CSS only  -->
    <link rel="stylesheet"  href="{{ url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{ url('assets/css/login.css')}}"> -->
    <title>PrePay</title>
  </head>
  <body>
    @yield('content')
    <!-- Transparent img header 
    <header>
    </header> -->
    <!-- Nabvar -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top bg-transparent">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"
          ><i class="fa-solid fa-hand-holding-dollar"></i> PrePay</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="payment-request">
            <a href="{{ url('views/auth/form.blade.php')}}" class="request-btn">
              <button class="btn btn-outline-dark">Solicita tu anticipo</button>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Footer -->
    <div class="footer-bg text-white-50" style="margin-top: 90px">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5">
            <a class="navbar-brand" href="index.html">
              <h2 class="text-white fw-bold">
                <i class="fa-solid fa-hand-holding-dollar"></i> PrePay
              </h2>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-5">
            <div class="d-flex flex-column footer-text justify-content-start">
              <h3 class="text-white mb-4">Get In Touch</h3>
              <p><i class="fa fa-map-marker-alt mr-2"></i> Argentina</p>
              <p><i class="fa fa-envelope mr-2"></i> prepay@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="container-fluid footer-bg text-white-50 border-top py-3"
      style="border-color: rgba(256, 256, 256, 0.1) !important"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-md-left mb-3 mb-md-0">
            <p class="m-0 footer-text">
              Copyright &copy;
              <a class="text-white" href="#" style="text-decoration: none"
                >PrePay</a
              >. All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/main.js"></script>
  </body>
</html>
