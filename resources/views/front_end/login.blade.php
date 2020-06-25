<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,400&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset("front_end/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("front_end/css/main.css")}}">
    <link rel="stylesheet" href="{{asset("front_end/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("front_end/css/responsive.css")}}">
    <style>
         body{
            background: url('img/finance.jpg')
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
               <div class="card-register" style="margin-top: 100px">
                <div style="text-align:center">
                    <img class="log-reg" style="width:100px;margin-top:-60px;margin-bottom:20px" src="{{asset('img/login2.svg')}}" alt="">
                    <h3 style="color: white" class="text-center">LOGIN</h3>
                 </div>
                    @if ($message = Session::get('errmsg'))
                        <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <form name="login-form" method="POST" action="{{route('login-action')}}">
                        @csrf
                      
                            <div class="form-group">
                                <input " type="email" name="email" class="form-control" id="email" value="{{old('email')}}" placeholder="Enter Your Email">
                            </div>

                            <div class="form-group">
                                <input  type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                      
                       
                            <button class="sub-btn">Submit</button><br>
                            <a href="{{route('register')}}" style="color:white:10px">Don't have an Id? Please register.</a>
                        
                    </form>
               </div>
            </div>
        </div>
    </div>
    
    <script src="{{asset("front_end/js/vendor/modernizr-3.6.0.min.js")}}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="{{asset("front_end/js/bootstrap.min.js")}}"></script>
  <script src="{{asset("front_end/js/plugins.js")}}"></script>
  <script src="https://kit.fontawesome.com/bad080b564.js" crossorigin="anonymous"></script>
  <script src="{{asset("front_end/js/main.js")}}"></script>
</body>
</html>