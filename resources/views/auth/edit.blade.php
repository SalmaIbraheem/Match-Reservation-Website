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
        <div class="wrap-login100 ">    
            <span class="login100-form-title "> Edit Information </span>

            <div class="card-body">
                <form method="POST" action="{{ route('edit') }}">
                @csrf
                    
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="first" style = "color: lightgray;">First Name</label> 
                        <input id="first" class="input100 form-control " type="name" name="first" placeholder="First Name"  value="{{Auth::user()->first}}" required autocomplete="first" autofocus> 

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <span class="focus-input100"></span> 
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="last" style = "color: lightgray;">Last Name</label> 
                        <input id="last" class="input100 form-control " type="name" name="last" placeholder="Last Name" value="{{Auth::user()->last}}" required autocomplete="last" autofocus> 

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <span class="focus-input100"></span> 
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="city" style = "color: lightgray;">City</label> 
                        <input id="city" class="input100 form-control " type="text" name="city" placeholder="city" value="{{Auth::user()->city}}"  required autocomplete="city" autofocus> 
                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <span class="focus-input100"></span> 
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="city" style = "color: lightgray;">Address</label> 
                        <input id="address" class="input100 form-control " type="text" name="address" placeholder="Address" value="{{Auth::user()->address}}" required autocomplete="address" autofocus> 

                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="city" style = "color: lightgray;">Gender</label> 
                        <select name="gender" id="gender"  class="input100 form-control " placeholder="Gender">
                        @if(Auth::user()->gender == "Male")
                            <option>Male<option>Female</select>
                        @else
                            <option>Female<option>Male</select>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="bday" style = "color: lightgray;">Birthday</label> 
                        <input id="bday" class="input100 form-control " type="date" name="bday" placeholder="Birthday"  value="{{Auth::user()->bday}}" required autocomplete="bday" autofocus> 
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="password" style = "color: lightgray;">Password</label>
                        <input id="password" type="password" class="input100 form-control " name="password" >
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="password-confirm" style = "color: lightgray;">Confirm Password</label>
                        <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" >
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary" style="width: inherit; margin: 10% 50%;">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body> 
