<html lang="en">
    <head>
        <title>{{Auth::user()->name}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="/images/icons/favicon.ico" />

        <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

        <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">

        <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">

        <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">

        <link rel="stylesheet" type="text/css" href="/css/util.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
    <style>
        body {
            font-family: 'Nunito';
            background-image: url("/images/img-01.jpg");
        }
    </style>
    </head>
    <div>
        @include('layouts.navigation')
        @yield('navigation')
    </div>
    <body>
    
    <div class="limiter"> 
        <div class="container-login100" >
            <div class="wrap-login100 p-t-190 p-b-30" style="padding-top: 0px;">    
                <form method="POST" action="/profile/edit/{{Auth::user()->id}}">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="city" style = "color: lightgray;">City</label> 
                        <input id="city" class="input100 form-control " type="city" name="city" placeholder="city" value="{{Auth::user()->city}}" required autocomplete="city" autofocus> 
                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <span class="focus-input100"></span> 
                    </div>
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="password" style = "color: lightgray;">Password</label>
                        <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="password-confirm" style = "color: lightgray;">Confirm Password</label>
                        <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="width: inherit; margin: 10% 50%;">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                    
                    
                    
            <script src="/vendor/jquery/jquery-3.2.1.min.js"></script> 
            <script src="/vendor/bootstrap/js/popper.js"></script> 
            <script src="/vendor/bootstrap/js/bootstrap.min.js"></script> 
            <script src="/vendor/select2/select2.min.js"></script> 
            <script src="/js/main.js"></script> 
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script> 
        </div> 
    </div>
</body> 
