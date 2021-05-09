<head>
    @include('template.head')
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">  
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">  
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/mainL.css')}}">
</head>

<body>
@include('template.script')
    

<section class="reservation-area section-gap relative">
                <div class="overlay overlay-bg"></div>
                
<div class="row justify-content-between align-items-center">   
<div class="col-md-6 reservation-left" width="400">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-interval="100">
          <div class="col-md-12 text-center text-white"> <h2>Selamat Datang Di </h2><br> <h2>Resto Ikan Bakar Banyumas</h2></div>
        </div>
        <div class="carousel-item" data-interval="100">
          <div class="col-md-12 text-center text-white"> <h3> Ikan Bakar Banyumas? Ikannya Gurih sambalnya nagih... </h3></div>
        </div>
        <div class="carousel-item" data-interval="100">
          <div class="col-md-12 text-center text-white"> <h1>Silahkan Login terlebih dahulu!!</h1></div>
        </div>
      </div>
    </div>
</div>

<div class="col-md-6">  
    <div class="limiter">
        <div class="container-login100 " >
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33 ">
                <form method="post" action="{{ route('login') }}" class="login100-form validate-form flex-sb flex-w">
                    @csrf
                    @if ($errors->has('email'))
                        <script>
                            swal("Mohon Teliti", "Email Atau Password Anda Salah", "warning")
                        </script>
                    @endif   
                    <span class="login100-form-title p-b-53">
                        Sign In With
                    </span>

                    <a href="{{ url('/auth/facebook') }}" class="btn-face m-b-20">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                    </a>

                    <a href="{{ url('/auth/twitter') }}" class="btn-google m-b-20">
                        <!--<img src="{{asset('img/icon/icon-google.png')}}" alt="GOOGLE">-->
                        <i class="fa fa-twitter"></i>
                        Twitter
                    </a>

                    <div class="p-t-31 p-b-9 ">
                        <span class="txt1">
                            E-Mail 
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Email is required">
                        <input class="input100 " type="email" name="email" required="email" value="{{ old('email') }}">
                        <span class="focus-input100"></span>     
                    </div>
                    
                    
                    <div class="p-t-13 p-b-9">
                        <span class="txt1">
                            Password
                        </span>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="txt2 bo1 m-l-5">
                            lupa?
                        </a>
                    @endif
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password"  required="password">
                        <span class="focus-input100 "></span>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <button type="submit" class="login100-form-btn">
                            Log In
                        </button>
                    </div>

                    <div class="w-full text-center p-t-55">
                        <span class="txt2">
                            Belum Punya Akun?
                        </span>

                        <a href="{{ route('register') }}" class="txt2 bo1">
                            Daftar Sekarang
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
                    <!--<div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="text-danger">Login</h2>
                            </div>
                            <div class="card-body">
                                <form method="post" class="form-wrap text-center" action="{{ route('login') }}">
                                    

                                    
                                    @csrf
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    
                                    <div class="form-group row">
                                        <label for="email"><b> E-Mail</b></label>
                                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" required>
                                    </div>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                    <div class="form-group row">
                                        <label for="password"><b> Password </b></label>
                                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required>        
                                    </div>
                                                                      
                                    <button type="submit" class="primary-btn text-uppercase mt-20">Login</button>
                                    <a href="{{ route('register') }}"><button class="primary-btn text-uppercase mt-20">Daftar</button></a>
                                </form>
                            </div>
                            </div>    
                        </div>
                    </div>-->
</section>

            <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
            <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
            <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
            <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
            <script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
            <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
            <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
</body>