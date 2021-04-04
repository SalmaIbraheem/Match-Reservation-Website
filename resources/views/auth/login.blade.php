<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
<div class="limiter"> 
    <div class="container-login100" style=  "background-image: url('/images/img-01.jpg');">
        <div class="wrap-login100 p-t-190 p-b-30">    
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <span class="login100-form-title p-t-20 p-b-45"> Egyptian Premier League </span> 
                <div class="wrap-input100 validate-input m-b-10" data-validate="Username is required"> 
                    <input id="email" class="input100 form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus> 

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <span class="focus-input100"></span> 
                    <span class="symbol-input100"> <i class="fa fa-user"></i> </span> 
                </div>
                <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required"> 
                    <input id="password" class="input100 form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password"> 
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <span class="focus-input100"></span> 
                    <span class="symbol-input100"> 
                    <i class="fa fa-lock"></i> </span> </div> 
                    <div class="container-login100-form-btn p-t-10"> 
                        <button type="submit" class="login100-form-btn btn btn-primary">{{ __('Login') }}</button> 

                    <div class="text-center w-full p-t-25 p-b-230"> </div> 
                    <div class="text-center w-full"> 
                        <a class="txt1" href="{{ route('register') }}"> 
                            Create new account 
                            <i class="fa fa-long-arrow-right"></i> 
                        </a> 
                    </div> 
                </div>
            </form>
        </div> 
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script> 
        <script src="vendor/bootstrap/js/popper.js"></script> 
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script> 
        <script src="vendor/select2/select2.min.js"></script> 
        <script src="js/main.js"></script> 
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> 
    </div> 
</div> 
</body>











