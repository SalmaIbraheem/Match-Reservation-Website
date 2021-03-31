@extends('layouts.app')

@section('content')
<div class="container">



        @foreach ($matches as $match)

            <td><a href="{{ route('displayMatch', $match->id) }}"class="btn btn-info">{{$match->homeTeam}}</a></td>
        @endforeach
    

  

</div>
@endsection