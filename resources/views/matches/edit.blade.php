<html lang="en">
    <head>
        <title>Edit Match</title>
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
            <span class="login100-form-title "> Edit Match Information </span>

            <div class="card-body">
                <form method="POST" action="{{ route('editMatch' , $m->id) }}">
                @csrf
                    
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="homeTeam" style = "color: lightgray;">Home Team</label> 
                        <input id="homeTeam" class="input100 form-control " type="name" name="homeTeam" placeholder="Home Team"  value="{{$m->homeTeam}}" required autocomplete="first" autofocus> 

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <span class="focus-input100"></span> 
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="awayTeam" style = "color: lightgray;">Away Team</label> 
                        <input id="awayTeam" class="input100 form-control " type="name" name="awayTeam" placeholder="away team" value="{{$m->awayTeam}}" required autocomplete="last" autofocus> 

                        @error('homeTeam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <span class="focus-input100"></span> 
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="referee" style = "color: lightgray;">Referee</label> 
                        <input id="referee" class="input100 form-control " type="name" name="referee" placeholder="Referee" value="{{$m->referee}}" required autocomplete="last" autofocus> 

                        @error('awayTeam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <span class="focus-input100"></span> 
                    </div>
                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="linesman1" style = "color: lightgray;">linesman 1</label> 
                        <input id="linesman1" class="input100 form-control " type="name" name="linesman1" placeholder="linesman1" value="{{$m->linesman1}}" required autocomplete="last" autofocus> 

                        @error('linesman1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <span class="focus-input100"></span> 
                    </div>

                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="linesman2" style = "color: lightgray;">linesman 2</label> 
                        <input id="linesman2" class="input100 form-control " type="name" name="linesman2" placeholder="linesman2" value="{{$m->linesman2}}" required autocomplete="last" autofocus> 

                        @error('linesman2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <span class="focus-input100"></span> 
                    </div>


                    <div class="wrap-input100 validate-input m-b-10">
                           <label for="stadium" style = "color: lightgray;">Stadium</label>
                                        <select class="input100 form-control" name="stadium_id">
                                                  @foreach ($stadiums as $stadium)
                                                  
                                                                <option value="{{ $stadium->id }}">{{ $stadium->location}}</option>
                                                  @endforeach
                                         </select>
                    </div>

                    <div class="wrap-input100 validate-input m-b-10">
                        <label for="date" style = "color: lightgray;">Date</label> 
                        <input id="date" class="input100 form-control " type="date" name="date" placeholder="date"  value="{{$matchDate}}"default="{{$m->date}}" required autocomplete="bday" autofocus> 
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
