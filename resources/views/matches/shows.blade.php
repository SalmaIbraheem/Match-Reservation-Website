<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
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

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="/css/navbar.css">
        <style>    
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
           
           
            body {
            font-family: 'Nunito';
            background-image: url("/images/img-01.jpg");
            color:white;
            }
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 80%;
            margin-left:10%;
            color:white;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }
      
        </style>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   
    <script>
    var id= {{$match->id}}

    $(document).ready(function(){
        setInterval(function(){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url:'/m'+'/'+id,
            
                type:'GET',
                dataType:'json',
                success:function(response){
                    
                    if(response.match.length>0){
                    var match ='';
                   
                    for(var i=0;i<response.match.length;i++){
                        var sid=response.match[i].id;
  
                        if(response.match[i].free == true){
                            document.getElementById(sid).style.backgroundColor = 'green' ;
                            document.getElementById(sid).disabled = false ;
                        }
                        else{
                            document.getElementById(sid).style.backgroundColor = 'red' ;
                            document.getElementById(sid).disabled = true ;
                        }
                        
                    }

                    }
                },error:function(err){

                }
            })
        }, 5000);
    });
    </script>

    </head>
   
    <body>
    <div>
        @include('layouts.navigation')
        @yield('navigation')
    </div>
    <table >
    @if(Auth::user()->type == 1)
    <tr>
    <td>    <a class="btn btn-primary" style="font-size:15px;padding:5px 10px;background-color:#333333;;border-color:gray"href="{{ route('showEditMatch', $match->id) }}" >Edit Match</a> </td>
    </tr>
    @endif
        <tr>
            <td style="font-weight: bold;">Home Team</td>
            <td>{{$match->homeTeam}}</td>
        </tr>
        <tr>
            <td  style="font-weight: bold;">Away Team</td>
            <td> {{$match->awayTeam}}</td>
        </tr>
        <tr>
            <td  style="font-weight: bold;">Stadium Location</td>
            <td> {{$match->stadium->location}}</td>
        </tr>
        <tr>
            <td  style="font-weight: bold;">Date</td>
            <td> {{$match->date}}</td>
        </tr>
        <tr>
            <td  style="font-weight: bold;">Referee</td>
            <td> {{$match->referee}}</td>
        </tr>
        <tr>
            <td  style="font-weight: bold;">Linesman1</td>
            <td> {{$match->linesman1}}</td>
        </tr>
        <tr>
            <td  style="font-weight: bold;">Linesman2</td>
            <td> {{$match->linesman2}}</td>
        </tr>
    </table>
    
    @auth

    <h3 style="margin-left:10%; " > Available Seat Are in Green  (click on seat number to reserve it) </h3>
    <table id="seatslist">
    <tr>
         @foreach ($match->seats as $seat)
         
         <form action="{{ route('credit', $seat->id) }}" method="get">
         @csrf
         @if($seat->free == '1')
         @if(Auth::user()->type == 0)
            <td><button id="{{$seat->id}}" style="background-color: green; "  type="submit" class="btn btn-success">{{$seat->seat_number}}</button></td>
        @else
        <td><button id="{{$seat->id}}" style="background-color: green; "  class="btn btn-info" disabled>{{$seat->seat_number}}</button></td>
        @endif
        @else
        <td><button id="{{$seat->id}}" style="background-color: red; "  class="btn btn-info" disabled>{{$seat->seat_number}}</button></td>
        @endif
        @if($seat->seat_number % $match->stadium->columns == '0')
        </tr><tr>
        @endif
         </form>
         @endforeach
    </table>
    <div>
    <div>
    @endauth


        @guest 
        <h3 style="margin-left:10%; "> Please sign in to be able to reserve seats </h3>
        @endguest
    </body>
</html>