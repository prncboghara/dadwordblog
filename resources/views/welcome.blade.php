<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/ar-dz.js"></script>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Dadword Blog</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">css</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Javascript</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Angular</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Laravel</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">React</a>
      </li> -->
    </ul>
  </div>
</nav>
<!-- End Navbar -->

<!-- Start Main Content -->

@yield('content')

<!-- End  Main Content -->
<div class="container-fluid bg-dark">
    <div class="footer">
        <div class="row">
            <div class="col-lg-4 text-white mb-5">
                <h5 class="mt-5  d-flex justify-content-center">Our Services</h5>
                    <li class="d-flex justify-content-center">css learning</li>
                    <li class="d-flex justify-content-center">Laravel learning</li>
                    <li class="d-flex justify-content-center">Angular learning</li>
            </div>
            <div class="col-lg-4 text-white">
                <h5 class="mt-5 d-flex justify-content-center">About Us</h5>
                <div class="about_us">We Provide Best serivce for better understanding student,developer and biggeners</div>
            </div>
            <div class="col-lg-4 text-white">
                <h5 class="mt-5 d-flex justify-content-center">follow Us</h5>
                <li class="d-flex justify-content-center">css learning</li>
                <li class="d-flex justify-content-center">Laravel learning</li>
                <li class="d-flex justify-content-center">Angular learning</li>
            </div>
        </div>
    </div>
</div>
</body>
</html>