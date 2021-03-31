@extends('layouts.app')

@section('content')
<div class="container">





        <h2> Match of {{$match->homeTeam}} against {{$match->awayTeam}}</h2>
        @auth
        <h3> Available Seat  (click on seat number to reserve it) </h3>
         @foreach ($match->seats as $seat)
         <form action="{{ route('reserveSeat', $seat->id) }}" method="post">
         @csrf
         @if($seat->free == '1')
            <td><button style="background-color: #4CAF50; "  type="submit" class="btn btn-info">{{$seat->seat_number}}</button></td>
        @else
        <td>{{$seat->seat_number}}</td>
        @endif
         </form>
         @endforeach
        @endauth

        @guest 
        <h3> Please sign in to be able to reserve seats </h3>
        @endguest
       
       
    

  

</div>
@endsection