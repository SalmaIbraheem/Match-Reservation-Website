@extends('layouts.app')

@section('content')
<div class="container">

<form action="/m" method="post">
  @csrf
  
  <div class="form-group">
    <label for="homeTeam">Home Team</label>
    <input type="text" class="form-control" id="homeTeam" name="homeTeam" placeholder="El-Ahly">
  </div>
  <div class="form-group">
    <label for="awayTeam">Away Team</label>
    <input type="text" class="form-control" id="awayTeam" name="awayTeam" placeholder="El-Zamlak">
  </div>
  <div class="form-group">
    <label for="referee">Referee Name</label>
    <input type="text" class="form-control" id="referee" name="referee" placeholder="Ahmed">
  </div>
  <div class="form-group">
    <label for="linesman1">First linesman</label>
    <input type="text" class="form-control" id="linesman1" name="linesman1" placeholder="name">
  </div>
  <div class="form-group">
    <label for="linesman2">Second linesman</label>
    <input type="text" class="form-control" id="linesman2" name="linesman2" placeholder="name">
  </div>
  <div class="form-group">
    <label for="matchDate">Date</label>
    <input type="date" class="form-control" id="matchDate" name="date" >
  </div>
  <div class="form-group">
    <label for="stadium">Stadium</label>
    <select class="form-control" name="stadium_id">
        @foreach ($stadiums as $stadium)
            <option value="{{ $stadium->id }}">{{ $stadium->location}}</option>
        @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Add Match</button>
</form>
</div>
@endsection