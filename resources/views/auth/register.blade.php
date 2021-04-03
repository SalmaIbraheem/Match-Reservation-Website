<html lang="en">
<head>
    <title>Register</title>
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
            <span class="login100-form-title p-t-20 p-b-45"> Register </span>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="name" style = "color: lightgray;">Name</label> 
                        <input id="name" class="input100 form-control " type="name" name="name" placeholder="Name"  required autocomplete="name" autofocus> 

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <span class="focus-input100"></span> 
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="email" style = "color: lightgray;">Email address</label> 
                        <input id="email" class="input100 form-control " type="email" name="email" placeholder="Email"  required autocomplete="email" autofocus> 

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <span class="focus-input100"></span> 
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="city" style = "color: lightgray;">City</label> 
                        <input id="city" class="input100 form-control " type="city" name="city" placeholder="city"  required autocomplete="city" autofocus> 
                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <span class="focus-input100"></span> 
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
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>
