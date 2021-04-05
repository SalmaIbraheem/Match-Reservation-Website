<html lang="en">
    <head>
        <title>Matches</title>
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Nunito';
            background-image: url("/images/img-01.jpg");

        }
        label {
          color:white;
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
            <span class="login100-form-title "> Create Match </span>

            <div class="card-body">
  <form action="/m" method="post">
  @csrf
  
  <div class="form-group">
    <label for="homeTeam">Home Team</label>
    <select class="form-control h-25"  id="homeTeam" name="homeTeam">
      <option value="El-Ahly">El-Ahly</option>
      <option value="El-Zamalek">El-Zamalek</option>
      <option value="Pyramids">Pyramids</option>
      <option value="Wadi Degla">Wadi Degla</option>
    </select>
  </div>
  <div class="form-group">
    <label for="awayTeam">Away Team</label>
    <select class="form-control h-25"  id="awayTeam" name="awayTeam">
      <option value="El-Ahly">El-Ahly</option>
      <option value="El-Zamalek">El-Zamalek</option>
      <option value="Pyramids">Pyramids</option>
      <option value="Wadi Degla">Wadi Degla</option>
    </select>
  </div>
  <div class="form-group">
    <label for="referee">Referee Name</label>
    <input type="text" class="form-control" id="referee" name="referee" >
  </div>
  <div class="form-group">
    <label for="linesman1">First linesman</label>
    <input type="text" class="form-control" id="linesman1" name="linesman1">
  </div>
  <div class="form-group">
    <label for="linesman2">Second linesman</label>
    <input type="text" class="form-control" id="linesman2" name="linesman2">
  </div>
  <div class="form-group">
    <label for="matchDate">Date</label>
    <input type="date" class="form-control" id="matchDate" name="date" >
  </div>
  <div class="form-group">
    <label for="stadium">Stadium</label>
    <select class="form-control h-25" name="stadium_id">
        @foreach ($stadiums as $stadium)
            <option value="{{ $stadium->id }}">{{ $stadium->location}}</option>
        @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Add Match</button>
</form>
            </div>
        </div>

    </div>
    <script>
      var today = new Date().toISOString().split('T')[0];
      document.getElementsByName("date")[0].setAttribute('min', today);
    </script>
</body> 
