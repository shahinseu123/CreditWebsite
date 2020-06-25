<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,400&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="{{asset("front_end/css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("front_end/css/main.css")}}">
  <link rel="stylesheet" href="{{asset("front_end/css/style.css")}}">
  <link rel="stylesheet" href="{{asset("front_end/css/responsive.css")}}">
  
  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light nav-top fixed-top">
    <div class="container">
      <!-- navbar  -->
      <a class="navbar-brand" href="#">
        <img src="{{asset("front_end/img//logo/CCM02.png")}}" style="width: 70px;" alt="">
      </a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <button class="navbar-toggler" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- mobile display  -->
      <div class="dp-mobile">
        <a class="cross"><i class="fas fa-times-circle" style="color: red;"></i></a>
        <ul>
          <li>
            <a class="nav-link" style="font-weight: bold;font-size: 14px;margin-left: 5px;color:black"
             href="{{route("home")}}">HOME </a>
          </li>
          <li>
            <a class="nav-link" style="font-weight: bold;font-size: 14px;margin-left: 5px;color:black"
             href="{{route("service")}}">SERVICE </a>
          </li>
          {{-- <li>
            <a class="nav-link" style="font-weight: bold;font-size: 14px;margin-left: 5px;color:black" href="#">COACHING
            </a>
          </li> --}}
          <li>
            <a class="nav-link" style="font-weight: bold;font-size: 14px;margin-left: 5px;color:black"
          href="{{route("about")}}">ABOUT </a>
          </li>
          <li>
            <a class="nav-link" style="font-weight: bold;font-size: 14px;margin-left: 5px;color:black"
          href="{{route("contact")}}">CONTACT
            </a>
          </li>
          {{-- <li>
            <a class="nav-link" style="font-weight: bold;font-size: 14px;margin-left: 5px;color:black" href="#">CARRERS
            </a>
          </li> --}}
        </ul>


      </div>
      <!-- end mobile display  -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav m-auto nav-bar-items">
          <li class="nav-item ">
          <a class="nav-link" style="font-weight: bold;font-size: 14px;margin-left: 5px;" href="{{route("home")}}">HOME </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-weight: bold;font-size: 14px;margin-left: 5px;"
          href="{{route("service")}}">SERVICE</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" style="font-weight: bold;font-size: 14px;margin-left: 5px;" href="#">COACHING</a>
          </li> --}}
          <li class="nav-item">
          <a class="nav-link" style="font-weight: bold;font-size: 14px;margin-left: 5px;" href="{{route("about")}}">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-weight: bold;font-size: 14px;margin-left: 5px;"
          href="{{route("contact")}}">CONTACT</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" style="font-weight: bold;font-size: 14px;margin-left: 5px;" href="#">CARRERS</a>
          </li> --}}
        <a href="{{route("contact")}}" class="book-btn">BOOK AN APPOINMENT</a>
        </ul>
      </div>
    </div>
  </nav>
  <section>
      @yield('content')
  </section>

  <section id="footer" style="background-color: teal;padding: 30px;margin-top: 30px;">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 col-lg-3">
          <img style="width: 100px;" src="{{asset("/front_end/img/logo/CCM02.png")}}" alt="logo"><br>
        <a href="{{route("contact")}}" class="btn order-btn my-4">BOOK AN APPOINMENT</a>

        </div>
        <div class="col-12 col-md-4 col-lg-3">
          <h5 class="white" style="font-weight: 600;">OUR OFFICE</h5>
          <p class="white">10601 S Western Ave, <br>
            Oklahoma City, OK, 73119</p>
        </div>
        <div class="col-12 col-md-4 col-lg-3">
          <h5 class="white" style="font-weight: 600;">CONTACT US</h5>
          <p class="white"><i class="fas fa-phone-square-alt mr-2"></i>1 405 977 1147</p>
          <P class="white"><i class="far fa-envelope mr-2"></i> info@CarsonXCreditRepair.com</p>
        </div>
        <div class="col-12 col-md-4 col-lg-3">
          <h5 class="white" style="font-weight: 600;">FOLLOW US</h5>

          <a href="#"><i class="fab fa-facebook-f icon-cir facebook-icon"></i></a>
          <a href="#"><i class="fab fa-twitter icon-cir twitter-icon"></i></a>
          <a href="#"><i class="fab fa-instagram icon-cir insta-icon"></i></a>
          <a href="#"><i class="fab fa-linkedin-in icon-cir linkedin-icon"></i></a>
          <a href="#"><i class="fab fa-youtube icon-cir youtube-icon"></i></a>
        </div>
      </div>
    </div>
  </section>

  <script src="{{asset("front_end/js/vendor/modernizr-3.6.0.min.js")}}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="{{asset("front_end/js/bootstrap.min.js")}}"></script>
  <script src="{{asset("front_end/js/plugins.js")}}"></script>
  <script src="https://kit.fontawesome.com/bad080b564.js" crossorigin="anonymous"></script>
  <script src="{{asset("front_end/js/main.js")}}"></script>
  <script>
    $('.navbar-toggler').click(() => {
      $('.dp-mobile').css('right', '0')
      $('.dp-mobile').css('display', 'block')
      $('.dp-mobile').css('transition', '1s')
    })
    $('.cross').click(() => {
      $('.dp-mobile').css('right', '-60%')
      $('.dp-mobile').css('transition', '1s')
    })
  </script>
</body>

</html>