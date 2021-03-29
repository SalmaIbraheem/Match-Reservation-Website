@extends('layouts.app')

@section('content')
<div class="container">



            <h2> Match of {{$match->homeTeam}} against {{$match->awayTeam}}</h2>
            <h3> Available Seat  (click on seat number to reserve it) </h3>
         @foreach ($match->seats as $seat)
            <td><a class="btn btn-info">{{$seat->seat_number}}</a></td>
        @endforeach
    

  

</div>
@endsection