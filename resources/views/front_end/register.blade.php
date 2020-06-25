<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
               <div class="card-register">
                    <div style="text-align:center">
                       <img class="log-reg" style="width:100px;margin-top:-60px" src="{{asset('img/reg.png')}}" alt="">
                       <h3 style="color: white" class="text-center">
                           REGISTER
                       </h3>
                    </div>
                    <form method="post" action="{{route('register-action')}}">
                        @csrf
                        {{-- {!! app('captcha')->render() !!} --}}
                        {{-- @captcha --}}
                            {{-- <div class="card-header text-center">
                                <h3 style="color: black">Register</h3>
                            </div> --}}
    
                            <div class="card-body">
                                @if(isset($errors))
                                    @foreach($errors->all() as $error)
                                    <p class="alert alert-danger noPrint">{{$error}}</p>
                                    @endforeach
                                @endif

                                @if ($message = Session::get('errmsg'))
                                    <div class="alert alert-danger">
                                    <p>{{ $message }}</p>
                                    </div>
                                @endif
    
    
                                <div class="form-group">
                                    <input  type="text" name="name" class="form-control" id="name"
                                    placeholder="Enter Your Name" value="{{old('name')}}" required>
                                </div>
                                <div class="form-group">
                                    <input  type="email" name="email" class="form-control" id="email"
                                        placeholder="Enter Your Email" value="{{old('email')}}" required>
                                </div>
                                <div class="form-group">
                                    <input  type="number" name="number" class="form-control" id="number"
                                        placeholder="Enter Your Phone number" value="{{old('number')}}" required>
                                </div>
                                <div class="form-group">
                                    <input  type="text" name="address" class="form-control" id="address"
                                        placeholder="Enter Your Address" value="{{old('address')}}" required>
                                </div>
    
                                {{-- <div class="input-group mb-3">
                                    <select name="user_type" class="custom-select" id="inputGroupSelect02" required>
                                        <option value="1">Admin</option>
                                        <option value="0">Investor</option>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                    </div>
                                </div> --}}
    
                                <div class="form-group">
                                    <input  type="password" name="password" class="form-control" id="password" placeholder="Password" required>
    
                                    {{-- <label>Password must be 8 charecter or more with Capital and Special Charecters.</label> --}}
                                    {{-- <i class="fas fa-eye show_password"></i> --}}
                                </div>
    
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" required>
                                    {{-- <i class="fas fa-eye show_password"></i> --}}
                                    <button class="sub-btn mt-3">SUBMIT</button><br>
                                    <a style="color: white" href="{{route('login')}}">Already registered? Please login.</a>
                                </div>
                            </div>
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
    <script src="{{asset('front_end/js/bootstrap.min.js.js')}}"></script>   
    {{-- <script src="{{asset('front_end/js/app.js')}}"></script>    --}}
</body>
</html>